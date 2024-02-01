{{-- 


|--------------------------------------------------------------------------
| Custom assets
|--------------------------------------------------------------------------

Custom assets are stored in the 'custom-assets' directory found inside the 'extra' folder.
Custom assets can be any file you would like to use in your theme.
For example: JS, CSS or image files.

You can load these custom assets with a built-in function, 'themeAsset()'.
Add the file you want to add to your 'custom-assets' folder, and include the name with the file extension in the function.

Down below, you can find a few examples using this function:



--}}

<style> 
/* work-sans-800 - latin_latin-ext */
@font-face {
  font-display: swap; /* Check https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display for other options. */
  font-family: 'Work Sans';
  font-style: normal;
  font-weight: 800;
  src: url('{{themeAsset('work-sans-v19-latin_latin-ext-800.woff2')}}') format('woff2'), /* Chrome 36+, Opera 23+, Firefox 39+, Safari 12+, iOS 10+ */
       url('{{themeAsset('work-sans-v19-latin_latin-ext-800.ttf')}}') format('truetype'); /* Chrome 4+, Firefox 3.5+, IE 9+, Safari 3.1+, iOS 4.2+, Android Browser 2.2+ */
}
/* work-sans-800italic - latin_latin-ext */
@font-face {
  font-display: swap; /* Check https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display for other options. */
  font-family: 'Work Sans';
  font-style: italic;
  font-weight: 800;
  src: url('{{themeAsset('work-sans-v19-latin_latin-ext-800italic.woff2')}}') format('woff2'), /* Chrome 36+, Opera 23+, Firefox 39+, Safari 12+, iOS 10+ */
       url('{{themeAsset('work-sans-v19-latin_latin-ext-800italic.ttf')}}') format('truetype'); /* Chrome 4+, Firefox 3.5+, IE 9+, Safari 3.1+, iOS 4.2+, Android Browser 2.2+ */
}

/* inter-regular - cyrillic_greek_latin_latin-ext */
@font-face {
  font-display: swap; /* Check https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display for other options. */
  font-family: 'Inter';
  font-style: normal;
  font-weight: 400;
  src: url('{{themeAsset('inter-v13-cyrillic_greek_latin_latin-ext-regular.woff2')}}') format('woff2'), /* Chrome 36+, Opera 23+, Firefox 39+, Safari 12+, iOS 10+ */
       url('{{themeAsset('inter-v13-cyrillic_greek_latin_latin-ext-regular.ttf')}}') format('truetype'); /* Chrome 4+, Firefox 3.5+, IE 9+, Safari 3.1+, iOS 4.2+, Android Browser 2.2+ */
}


html {
    font-size: 100%; }

  :root {
    --bgColor: #6F003C;
    --accentColor: #FFF;
    --heading-font: 'Work Sans', sans-serif;
    --font: 'Inter', sans-serif;
    --delay: .3s; }
</style>