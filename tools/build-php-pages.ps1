# Regenerates *.php from *.html when HTML snapshots exist in the project root.
# After conversion, HTML files may be removed; restore them from git to re-run, e.g.:
#   git checkout <commit> -- index.html about.html ...
$ErrorActionPreference = 'Stop'
$root = Split-Path -Parent $PSScriptRoot
Set-Location $root

function Fix-PageLinks([string]$s) {
  return [regex]::Replace($s, '\./([\w-]+)\.html', './${1}.php')
}

function Convert-HtmlToPhpBody([string]$html) {
  $html = Fix-PageLinks $html
  $headerMatch = [regex]::Match($html, '(?s)(<header[^>]+>)\s*<nav.*?</nav>\s*(.*?)</header>')
  if (-not $headerMatch.Success) { throw 'No header/nav block found' }
  $headerOpen = $headerMatch.Groups[1].Value
  $headerInner = $headerMatch.Groups[2].Value.TrimEnd()
  $mainMatch = [regex]::Match($html, '(?s)</header>\s*(<main.*?</main>)')
  if (-not $mainMatch.Success) { throw 'No main block found' }
  $main = $mainMatch.Groups[1].Value.Trim()
  return @{
    HeaderOpen = $headerOpen
    HeaderInner = $headerInner
    Main        = $main
  }
}

function Emit-PhpPage($name, $meta, $parts) {
  $lines = New-Object System.Collections.Generic.List[string]
  $lines.Add('<?php')
  $lines.Add('$pageTitle = ' + (ConvertTo-Json $meta.title -Compress) + ';')
  $lines.Add('$pageDescription = ' + (ConvertTo-Json $meta.description -Compress) + ';')
  if ($meta.bodyClass) {
    $lines.Add('$bodyClass = ' + (ConvertTo-Json $meta.bodyClass -Compress) + ';')
  }
  $lines.Add('$navContext = ' + (ConvertTo-Json $meta.navContext -Compress) + ';')
  $lines.Add('$navActive = ' + (ConvertTo-Json $meta.navActive -Compress) + ';')
  $lines.Add('$footerContext = ' + (ConvertTo-Json $meta.footerContext -Compress) + ';')
  if ($meta.accountAuthModal -eq $false) {
    $lines.Add('$accountAuthModal = false;')
  }
  $lines.Add("require __DIR__ . '/includes/head.php';")
  $lines.Add('?>')
  $lines.Add($parts.HeaderOpen)
  $lines.Add("<?php require __DIR__ . '/includes/header.php'; ?>")
  $lines.Add('')
  $lines.Add($parts.HeaderInner)
  $lines.Add('')
  $lines.Add('</header>')
  $lines.Add('')
  $lines.Add($parts.Main)
  $lines.Add('')
  $lines.Add("<?php require __DIR__ . '/includes/footer.php'; ?>")
  $lines.Add("<?php require __DIR__ . '/includes/foot.php'; ?>")
  $outPath = Join-Path $root ($name + '.php')
  $lines -join "`r`n" | Set-Content -Path $outPath -Encoding UTF8
}

$defs = @{
  'index' = @{
    title             = 'Lazzaro Laurels'
    description       = 'Lazzaro Laurels perfume landing page featuring premium fragrances, collections, and best-selling scents.'
    bodyClass         = 'home-page'
    navContext        = 'home'
    navActive         = 'home'
    footerContext     = 'home'
  }
  'about' = @{
    title             = 'About Us | Lazzaro Laurels'
    description       = 'Learn about Lazzaro Laurels, our fragrance philosophy, product development approach, and customer care.'
    navContext        = 'inner'
    navActive         = 'about'
    footerContext     = 'inner'
  }
  'products' = @{
    title             = 'Products | Lazzaro Laurels'
    description       = 'Browse the Lazzaro Laurels fragrance catalog featuring signature scents, premium notes, and curated collections.'
    navContext        = 'inner'
    navActive         = 'products'
    footerContext     = 'inner'
  }
  'product-detail' = @{
    title             = 'Product Detail | Lazzaro Laurels'
    description       = 'Explore detailed fragrance notes, size options, pricing, and product information for Lazzaro Laurels perfumes.'
    navContext        = 'inner'
    navActive         = 'products'
    footerContext     = 'inner'
  }
  'cart' = @{
    title             = 'Cart | Lazzaro Laurels'
    description       = 'Review items in your Lazzaro Laurels cart and continue to secure checkout.'
    navContext        = 'inner'
    navActive         = ''
    footerContext     = 'inner'
  }
  'checkout' = @{
    title             = 'Checkout | Lazzaro Laurels'
    description       = 'Complete your Lazzaro Laurels purchase with shipping details and order summary.'
    navContext        = 'inner'
    navActive         = ''
    footerContext     = 'inner'
  }
  'account' = @{
    title             = 'My Account | Lazzaro Laurels'
    description       = 'Manage your Lazzaro Laurels account details, orders, and saved addresses.'
    bodyClass         = 'account-page-body'
    navContext        = 'inner'
    navActive         = ''
    footerContext     = 'inner'
    accountAuthModal  = $false
  }
  'account-address' = @{
    title             = 'My Address | Lazzaro Laurels'
    description       = 'Add a new Lazzaro Laurels address on a separate account page.'
    bodyClass         = 'account-page-body'
    navContext        = 'inner'
    navActive         = ''
    footerContext     = 'inner'
    accountAuthModal  = $false
  }
  'privacy-policy' = @{
    title             = 'Privacy Policy | Lazzaro Laurels'
    description       = 'Review the Lazzaro Laurels privacy policy, product terms, payment policies, delivery, returns, and user responsibilities.'
    navContext        = 'inner'
    navActive         = ''
    footerContext     = 'inner'
  }
}

foreach ($key in $defs.Keys) {
  $path = Join-Path $root ($key + '.html')
  if (-not (Test-Path $path)) { throw "Missing $path" }
  $raw = Get-Content -Path $path -Raw -Encoding UTF8
  $parts = Convert-HtmlToPhpBody $raw
  Emit-PhpPage $key $defs[$key] $parts
}

Write-Host 'Wrote' $defs.Count 'PHP pages to' $root
