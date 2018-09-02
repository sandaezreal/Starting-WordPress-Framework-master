<!--Begin Style Guide-->
<!--Begin Branding Colors-->
<section class="sg-section">
  <div class="row row-site column">
    <h1 data-anchor="Color Palette" class="sg-section__heading"><span>1</span> Color Palette</h1>
  </div>
  <div class="row row-site column">
    <div class="row xsmall-up-2 medium-up-4">
      <div class="column swatch">
        <div class="swatch__color bg-blue"></div>
        <div class="swatch__hex">#03A2C9 <span class="swatch__name blue">.blue / primary (buttons, links)</span> </div>
      </div>
      <div class="column swatch">
        <div class="swatch__color bg-navy"></div>
        <div class="swatch__hex">#061E31 <span class="swatch__name navy">.navy / secondary  (headings, text, overlays)</span> </div>
      </div>
      <div class="column swatch">
        <div class="swatch__color bg-orange"></div>
        <div class="swatch__hex">#FCA41A <span class="swatch__name orange">.orange / tertiary (accents)</span> </div>
      </div>
      <div class="column swatch">
        <div class="swatch__color bg-black"></div>
        <div class="swatch__hex">#01070D <span class="swatch__name black">.black / overlays, shadows</span> </div>
      </div>
      <div class="column swatch">
        <div class="swatch__color bg-gray"></div>
        <div class="swatch__hex">#767E85 <span class="swatch__name gray">.gray / body text</span> </div>
      </div>
      <div class="column swatch">
        <div class="swatch__color bg-light-gray"></div>
        <div class="swatch__hex">#EBECED <span class="swatch__name gray">.light-gray / body text</span> </div>
      </div>
      <div class="column swatch">
        <div class="swatch__color bg-off-white"></div>
        <div class="swatch__hex">#FAFBFB <span class="swatch__name gray">.off-white / body text</span> </div>
      </div>
    </div>
<code>
<pre>
<?php
$html = <<<END
<div class="blue">Text Color</div>
<div class="bg-blue">Background Color</div>
<div class="navy">Text Color</div>
<div class="bg-navy">Background Color</div>
<div class="orange">Text Color</div>
<div class="bg-orange">Background Color</div>
<div class="black">Text Color</div>
<div class="bg-black">Background Color</div>
<div class="gray">Text Color</div>
<div class="bg-gray">Background Color</div>
<div class="light-gray">Text Color</div>
<div class="bg-light-gray">Background Color</div>
<div class="off-white">Text Color</div>
<div class="bg-off-white">Background Color</div>
END;
echo htmlentities($html);
?>
</pre>
</code>
</div>
</section>
<!--End Branding Colors-->
<!--Begin Typography-->
<section class="sg-section">
  <div class="row row-site column">
    <h1 data-anchor="Typography" class="sg-section__heading"><span>2</span> Typography</h1>
  </div>
  <div class="row row-site column">
    <div class="row">
      <div class="medium-4 columns">
        <!--Begin Typography - Fonts-->
        <h2 data-anchor="Fonts" class="sg-section__subheading"><span>Fonts</span></h2>
        <div class="sg-section__font europa">
          <div class="sg-section__font-left">
            <span class="sg-section__font-letters">Aa</span>
            <span class="h1 sg-section__font-name">Europa</span>
          </div>
          <div class="sg-section__font-right">
            <span class="sg-section__font-weight">regular</span>
            <span class="sg-section__font-weight italic">regular italic</span>
            <span class="sg-section__font-weight bold">bold</span>
          </div>
        </div>
<code>
<pre>
<?php
$html = <<<END
<p class="europa">Example copy lorem ipsum dolor sit amet.</p>
<p class="europa bold">Example copy lorem ipsum dolor sit amet.</p>
<p class="europa italic">Example copy lorem ipsum dolor sit amet.</p>
<p class="europa bold italic">Example copy lorem ipsum dolor sit amet.</p>
END;
echo htmlentities($html);
?>
</pre>
</code>
        <!--End Typography - Fonts-->
        <!--Begin Typography - Helpers-->
        <h2 data-anchor="Helpers" class="sg-section__subheading"><span>Helpers</span></h2>
        <p class="italic">Italic Font</p>
        <p class="caps">Uppercase Font</p>
        <p class="regular-case">Regular Case Font</p>
        <p class="bold">Bold Font Weight</p>
        <p class="regular">Normal Font Weight</p>
        <p class="t1">Font Size t1</p>
        <p class="t2">Font Size t2</p>
        <p class="t3">Font Size t3</p>
        <p class="t4">Font Size t4</p>
        <p class="t5">Font Size t5</p>
        <p class="t6">Font Size t6</p>
        <p class="t7">Font Size t7</p>
        <p class="t8">Font Size t8</p>
        <p class="t9">Font Size t9</p>
        <p class="t10">Font Size t10</p>
<code>
<pre>
<?php
$html = <<<END
<p class="italic">Italic Font</p>
<p class="caps">Uppercase Font</p>
<p class="regular-case">Regular Case Font</p>
<p class="bold">Bold Font Weight</p>
<p class="regular">Normal Font Weight</p>
<p class="t1">Font Size t1</p>
<p class="t2">Font Size t2</p>
<p class="t3">Font Size t3</p>
<p class="t4">Font Size t4</p>
<p class="t5">Font Size t5</p>
<p class="t6">Font Size t6</p>
<p class="t7">Font Size t7</p>
<p class="t8">Font Size t8</p>
<p class="t9">Font Size t9</p>
<p class="t10">Font Size t10</p>
END;
echo htmlentities($html);
?>
</pre>
</code>
        <!--End Typography - Helpers-->
      </div>
      <div class="medium-7 columns">
        <!--Begin Typography - Headings-->
        <h2 data-anchor="Headings" class="sg-section__subheading"><span>Headings</span></h2>
        <h1>h1 - Heading</h1>
        <h1 class="subheader">h1 - Sub Heading</h1>
        <h2>h2 - Heading</h2>
        <h2 class="subheader">h2 - Sub Heading</h2>
        <h3>h3 - Heading</h3>
        <h3 class="subheader">h3 - Sub Heading</h3>
        <h4>h4 - Heading</h4>
        <h4 class="subheader">h4 - Sub Heading</h4>
        <h5>h5 - Heading</h5>
        <h5 class="subheader">h5 - Sub Heading</h5>
        <h6>h6 - Heading</h6>
        <h6 class="subheader">h6.Sub Heading</h6>
        <h3 class="h1">Heading Sizer h1</h3>
        <h3 class="h2">Heading Sizer h2</h3>
        <h3 class="h3">Heading Sizer h3</h3>
        <h3 class="h4">Heading Sizer h4</h3>
        <h3 class="h5">Heading Sizer h5</h3>
        <h3 class="h6">Heading Sizer h6</h3>
<code>
<pre>
<?php
$html = <<<END
<h1 class="small caps">Headings</h1>
<h1>h1 - Heading</h1>
<h1 class="subheader">h1 - Sub Heading</h1>
<h2>h2 - Heading</h2>
<h2 class="subheader">h2 - Sub Heading</h2>
<h3>h3 - Heading</h3>
<h3 class="subheader">h3 - Sub Heading</h3>
<h4>h4 - Heading</h4>
<h4 class="subheader">h4 - Sub Heading</h4>
<h5>h5 - Heading</h5>
<h5 class="subheader">h5 - Sub Heading</h5>
<h6>h6 - Heading</h6>
<h6 class="subheader">h6.Sub Heading</h6>
<h3 class="h1">Heading Sizer h1</h3>
<h3 class="h2">Heading Sizer h2</h3>
<h3 class="h3">Heading Sizer h3</h3>
<h3 class="h4">Heading Sizer h4</h3>
<h3 class="h5">Heading Sizer h5</h3>
<h3 class="h6">Heading Sizer h6</h3>
END;
echo htmlentities($html);
?>
</pre>
</code>
        <!--End Typography - Headings-->
        <!--Begin Typography - Font Icons-->
        <h2 data-anchor="Fonts Icons" class="sg-section__subheading"><span>Font Icons</span></h2>
        <p class="t10 mb4">
          <span class="icon-mobile-phone"></span>
          <span class="icon-chat-message"></span>
          <span class="icon-dollar-sign"></span>
          <span class="icon-grid-menu"></span>
          <span class="icon-sp-arrow-down"></span>
          <span class="icon-sp-arrow-left"></span>
          <span class="icon-sp-arrow-right"></span>
          <span class="icon-sp-arrow-up"></span>
          <span class="icon-fitness-centers"></span>
          <span class="icon-hotel"></span>
          <span class="icon-recreation"></span>
          <span class="icon-residential"></span>
          <span class="icon-school"></span>
          <span class="icon-swim-school"></span>
        </p>
        <p><a class="text-button" href="/_icons" target="_blank">View All Font Icons</a></p>
<code>
<pre>
<?php
$html = <<<END
<span class="icon-mobile-phone"></span>
<span class="icon-chat-message"></span>
<span class="icon-dollar-sign"></span>
<span class="icon-grid-menu"></span>
<span class="icon-sp-arrow-down"></span>
<span class="icon-sp-arrow-left"></span>
<span class="icon-sp-arrow-right"></span>
<span class="icon-sp-arrow-up"></span>
<span class="icon-fitness-centers"></span>
<span class="icon-hotel"></span>
<span class="icon-recreation"></span>
<span class="icon-residential"></span>
<span class="icon-school"></span>
<span class="icon-swim-school"></span>
END;
echo htmlentities($html);
?>
</pre>
</code>
        <!--End Typography - Font Icons-->
      </div>
    </div>
  </div>
  <div class="row row-site column">
    <!--Begin Typography - Section Headings-->
    <h2 data-anchor="Section Headings" class="sg-section__subheading"><span>Section Headings</span></h2>
    <h4 class="headings">Section Headings</h4>
<code>
<pre>
<?php
$html = <<<END
<h4 class="headings">Section Headings</h4>
END;
echo htmlentities($html);
?>
</pre>
</code>
    <!--End Typography - Section Headings-->
  </div>
  <div class="row row-site column">
    <!--Begin Typography - Body Copy-->
    <h2 data-anchor="Body Copy" class="sg-section__subheading"><span>Body Copy</span></h2>
    <div class="row">
      <div class="small-11 medium-10 large-9 xlarge-8 small-centered column">
        <h1>Heading</h1>
        <p class="lead">lead paragraph donec venenatis vulputate lorem. Nam at tortor in tellus interdum sagittis. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. Praesent egestas neque eu enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce id purus.</p>
        <p><strong>Body Paragraph</strong> enean tellus metus, bibendum sed, posuere ac, mattis non, nunc. <a href="#">Paragraph link</a>. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas tristique nibh. In hac habitasse platea dictumst. Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
        <p>Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
        <img src="https://placehold.it/350x250" class="alignright border">
        <p>enean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce commodo aliquam arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas tristique nibh. In hac habitasse platea dictumst. Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
        <p>Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
        <img src="https://placehold.it/350x250" class="alignleft border">
        <p>enean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce commodo aliquam arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas tristique nibh. In hac habitasse platea dictumst. Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
        <p>Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
        <p>enean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce commodo aliquam arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas tristique nibh. In hac habitasse platea dictumst. Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
        <p>Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
        <img src="https://placehold.it/1200x400" class="aligntop border">
        <p>enean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce commodo aliquam arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas tristique nibh. In hac habitasse platea dictumst. Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
      </div>
    </div>
<code>
<pre>
<?php
$html = <<<END
<p class="lead">This is a lead paragraph donec venenatis vulputate lorem. Nam at tortor in tellus interdum sagittis. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. Praesent egestas neque eu enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce id purus.</p>
<p>enean tellus metus, bibendum sed, posuere ac, mattis non, nunc. <a href="#">Paragraph link</a>. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas tristique nibh. In hac habitasse platea dictumst. Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
<p>Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
<img src="https://placehold.it/350x250" class="alignright border">
<p>enean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce commodo aliquam arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas tristique nibh. In hac habitasse platea dictumst. Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
<p>Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
<img src="https://placehold.it/350x250" class="alignleft border">
<p>enean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce commodo aliquam arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas tristique nibh. In hac habitasse platea dictumst. Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
<p>Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
<p>enean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce commodo aliquam arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas tristique nibh. In hac habitasse platea dictumst. Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
<p>Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
<img src="https://placehold.it/1200x400" class="aligntop border">
<p>enean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce commodo aliquam arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas tristique nibh. In hac habitasse platea dictumst. Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
END;
echo htmlentities($html);
?>
</pre>
</code>
 </div>
  <!--End Typography - Body Copy-->
  <!--Begin Typography - Article Copy-->
  <div class="row row-site column">
    <h2 data-anchor="Article Copy" class="sg-section__subheading"><span>Article Copy</span></h2>
    <div class="row">
      <div class="small-11 medium-10 large-9 xlarge-8 small-centered column article">
        <h1>Article copy that decreases container width and increases font size</h1>
        <p>Article copy that decreases container width and increases font size for easier reading experience. enean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce commodo aliquam arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas tristique nibh. In hac habitasse platea dictumst. Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
        <h2>Article Headline Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt mollitia, ipsam cupiditate.</h2>
        <p>Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
        <p>Lorem ipsum enean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce commodo aliquam arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas tristique nibh. In hac habitasse platea dictumst. Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
        <p>Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
      </div>
    </div>
<code>
<pre>
<?php
$html = <<<END
<div class="row">
  <div class="small-11 medium-10 large-9 xlarge-8 small-centered column article">
    <h1>Article copy that decreases container width and increases font size</h1>
    <p>Article copy that decreases container width and increases font size for easier reading experience. enean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce commodo aliquam arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas tristique nibh. In hac habitasse platea dictumst. Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
    <h2>Article Headline Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt mollitia, ipsam cupiditate.</h2>
    <p>Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
    <p>Lorem ipsum enean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce commodo aliquam arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas tristique nibh. In hac habitasse platea dictumst. Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
    <p>Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
  </div>
</div>
END;
echo htmlentities($html);
?>
</pre>
</code>
</div>
  <!--End Typography - Article Copy-->
  <!--Begin Typography - Caption-->
  <div class="row row-site column">
    <h2 data-anchor="Caption" class="sg-section__subheading"><span>Caption</span></h2>
    <div class="row">
      <div class="small-11 medium-10 large-9 xlarge-8 small-centered column caption">
        <p><strong>Caption</strong> that decreases container width and increases font size for easier reading experience. enean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce commodo aliquam arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas tristique nibh. In hac habitasse platea dictumst. Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
      </div>
    </div>
<code>
<pre>
<?php
$html = <<<END
<div class="row">
  <div class="small-11 medium-10 large-9 xlarge-8 small-centered column caption">
   <p><strong>Caption</strong> that decreases container width and increases font size for easier reading experience. enean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce commodo aliquam arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas tristique nibh. In hac habitasse platea dictumst. Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
  </div>
</div>
END;
echo htmlentities($html);
?>
</pre>
</code>
 </div>
  <!--End Typography - Caption-->
  <!--Begin Typography - Tiny-->
  <div class="row row-site column">
    <h2 data-anchor="Tiny" class="sg-section__subheading"><span>Tiny</span></h2>
    <div class="row">
      <div class="small-11 medium-10 large-9 xlarge-8 small-centered column caption-tiny">
        <p><strong>Tiny</strong> that decreases container width and increases font size for easier reading experience. enean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce commodo aliquam arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas tristique nibh. In hac habitasse platea dictumst. Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
      </div>
    </div>
<code>
<pre>
<?php
$html = <<<END
<div class="row">
  <div class="small-11 medium-10 large-9 xlarge-8 small-centered column caption-tiny">
   <p><strong>Tiny</strong> that decreases container width and increases font size for easier reading experience. enean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce commodo aliquam arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas tristique nibh. In hac habitasse platea dictumst. Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
  </div>
</div>
END;
echo htmlentities($html);
?>
</pre>
</code>
   </div>
  <!--End Typography - Tiny-->
  <!--Begin Typography - Body Copy Alignment-->
  <div class="row row-site column">
    <h2 data-anchor="Body Copy Alignment" class="sg-section__subheading"><span>Body Copy Alignment</span></h2>
    <p class="left-align border p1"><strong>Left Align</strong> Lorem ipsum Ut a nisl id ante tempus hendrerit.</p>
    <p class="right-align border p1"><strong>Right Align</strong> Lorem ipsum Ut a nisl id ante tempus hendrerit.</p>
    <p class="center border p1"><strong>Center</strong> Lorem ipsum Ut a nisl id ante tempus hendrerit.</p>
<code>
<pre>
<?php
$html = <<<END
<p class="left-align"><strong>Left Align</strong> Lorem ipsum Ut a nisl id ante tempus hendrerit.</p>
<p class="right-align"><strong>Right Align</strong> Lorem ipsum Ut a nisl id ante tempus hendrerit.</p>
<p class="center"><strong>Center</strong> Lorem ipsum Ut a nisl id ante tempus hendrerit.</p>
END;
echo htmlentities($html);
?>
</pre>
</code>
</div>
  <!--End Typography - Body Copy Alignment-->
  <!--Begin Typography - Blockquotes-->
  <div class="row row-site column">
    <div class="row">
      <div class="small-11 medium-10 large-9 xlarge-8 small-centered column">
        <h2 data-anchor="Blockquotes" class="sg-section__subheading"><span>Blockquotes</span></h2>
        <blockquote>
          <div class="quote">
            <p>Blockquote Text donec venenatis vulputate lorem. Nam at tortor in tellus interdum sagittis. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. Praesent egestas neque eu enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce id purus. posuere cubilia Curae; Fusce id purus. Fusce id purus. posuere </p>
          </div>
          <p class="cite">Optional Authors Name <span> Optional Second Field</span> </p>
        </blockquote>
<code>
<pre>
<?php
$html = <<<END
<blockquote>
 <div class="quote">
    <p>Blockquote Text donec venenatis vulputate lorem. Nam at tortor in tellus interdum sagittis. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. Praesent egestas neque eu enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce id purus. posuere cubilia Curae; Fusce id purus. Fusce id purus. posuere </p>
  </div>
  <p class="cite">Optional Authors Name <span> Optional Second Field</span> </p>
</blockquote>
END;
echo htmlentities($html);
?>
</pre>
</code>
       </div>
    </div>
  </div>
  <!--End Typography - Blockquotes-->
  <!--Begin Typography - Lists-->
  <div class="row row-site column">
    <div class="row">
      <div class="medium-4 columns">
        <h2 data-anchor="Unordered List" class="sg-section__subheading"><span>Unordered List</span></h2>
        <ul class="bullets">
          <li>List Item 1</li>
          <li>List Item 2</li>
          <li>List Item 3</li>
          <li>List Item 4
            <ul>
              <li>Sub List Item 1</li>
              <li>Sub List Item 2</li>
              <li>Sub List Item 3</li>
              <li>Sub List Item 4</li>
              <li>Sub List Item 5</li>
            </ul>
          </li>
          <li>List Item 6</li>
        </ul>
      </div>
      <div class="medium-4 columns">
        <h2 data-anchor="Unordered List" class="sg-section__subheading"><span>Unordered List</span></h2>
        <ul class="checkmarks">
          <li>List Item 1</li>
          <li>List Item 2</li>
          <li>List Item 3</li>
          <li>List Item 4
            <ul>
              <li>Sub List Item 1</li>
              <li>Sub List Item 2</li>
              <li>Sub List Item 3</li>
              <li>Sub List Item 4</li>
              <li>Sub List Item 5</li>
            </ul>
          </li>
          <li>List Item 6</li>
        </ul>
      </div>
      <div class="medium-4 columns">
        <h2 data-anchor="Ordered List" class="sg-section__subheading"><span>Ordered List</span></h2>
        <ol>
          <li>List Item 1</li>
          <li>List Item 2</li>
          <li>List Item 3</li>
          <li>List Item 4
            <ol>
              <li>Sub List Item 1</li>
              <li>Sub List Item 2</li>
              <li>Sub List Item 3</li>
              <li>Sub List Item 4</li>
              <li>Sub List Item 5</li>
            </ol>
          </li>
          <li>List Item 6</li>
        </ol>
      </div>
    </div>
<code>
<pre>
<?php
$html = <<<END
<ul class="bullets">
  <li>List Item 1</li>
  <li>List Item 2</li>
  <li>List Item 3</li>
  <li>List Item 4
    <ul>
      <li>Sub List Item 1</li>
      <li>Sub List Item 2</li>
      <li>Sub List Item 3</li>
      <li>Sub List Item 4</li>
      <li>Sub List Item 5</li>
    </ul>
  </li>
  <li>List Item 6</li>
</ul>
<ul class="checkmarks">
  <li>List Item 1</li>
  <li>List Item 2</li>
  <li>List Item 3</li>
  <li>List Item 4
    <ul>
      <li>Sub List Item 1</li>
      <li>Sub List Item 2</li>
      <li>Sub List Item 3</li>
      <li>Sub List Item 4</li>
      <li>Sub List Item 5</li>
    </ul>
  </li>
  <li>List Item 6</li>
</ul>
<ol>
  <li>List Item 1</li>
  <li>List Item 2</li>
  <li>List Item 3</li>
  <li>List Item 4
    <ol>
      <li>Sub List Item 1</li>
      <li>Sub List Item 2</li>
      <li>Sub List Item 3</li>
      <li>Sub List Item 4</li>
      <li>Sub List Item 5</li>
    </ol>
  </li>
  <li>List Item 6</li>
</ol>
END;
echo htmlentities($html);
?>
</pre>
</code>
  </div>
  <!--End Typography - Lists-->
  <!--Begin Typography - Number Section-->
  <div class="row row-site column">
    <div class="row">
      <div class="small-11 medium-10 large-9 xlarge-8 small-centered column">
        <h2 data-anchor="Number Section" class="sg-section__subheading"><span>Number Section</span></h2>
        <div class="number-section">
          <h3>Headline</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo quos porro quisquam nesciunt quia a, quae libero. Tempore delectus at animi facere! Voluptatem, delectus cumque nisi error distinctio. Excepturi temporibus aspernatur quam itaque fugiat recusandae omnis cupiditate illo assumenda architecto saepe, laudantium expedita quas, ipsa ut suscipit non quibusdam magnam.</p>
          <h3>Headline</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo quos porro quisquam nesciunt quia a, quae libero. Tempore delectus at animi facere! Voluptatem, delectus cumque nisi error distinctio. Excepturi temporibus aspernatur quam itaque fugiat recusandae omnis cupiditate illo assumenda architecto saepe, laudantium expedita quas, ipsa ut suscipit non quibusdam magnam.</p>
          <h3>Headline</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo quos porro quisquam nesciunt quia a, quae libero. Tempore delectus at animi facere! Voluptatem, delectus cumque nisi error distinctio. Excepturi temporibus aspernatur quam itaque fugiat recusandae omnis cupiditate illo assumenda architecto saepe, laudantium expedita quas, ipsa ut suscipit non quibusdam magnam.</p>
        </div>
<code>
<pre>
<?php
$html = <<<END
<div class="number-section">
  <h3>Headline</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo quos porro quisquam nesciunt quia a, quae libero. Tempore delectus at animi facere! Voluptatem, delectus cumque nisi error distinctio. Excepturi temporibus aspernatur quam itaque fugiat recusandae omnis cupiditate illo assumenda architecto saepe, laudantium expedita quas, ipsa ut suscipit non quibusdam magnam.</p>
  <h3>Headline</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo quos porro quisquam nesciunt quia a, quae libero. Tempore delectus at animi facere! Voluptatem, delectus cumque nisi error distinctio. Excepturi temporibus aspernatur quam itaque fugiat recusandae omnis cupiditate illo assumenda architecto saepe, laudantium expedita quas, ipsa ut suscipit non quibusdam magnam.</p>
  <h3>Headline</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo quos porro quisquam nesciunt quia a, quae libero. Tempore delectus at animi facere! Voluptatem, delectus cumque nisi error distinctio. Excepturi temporibus aspernatur quam itaque fugiat recusandae omnis cupiditate illo assumenda architecto saepe, laudantium expedita quas, ipsa ut suscipit non quibusdam magnam.</p>
</div>
END;
echo htmlentities($html);
?>
</pre>
</code>
     </div>
    </div>
  </div>
  <!--End Typography - Number Section-->
</section>
<!--End Typography-->
<!--Begin Spacing-->
<section class="sg-section">
  <div class="row row-site column">
    <h1 data-anchor="Spacing" class="sg-section__heading"><span>3</span> Spacing</h1>
    <div class="row">
      <div class="medium-6 columns">
        <h2 data-anchor="Top Margin Spacing" class="sg-section__subheading"><span>Top Margin Spacing</span></h2>
        <div class="mt0">Margin Top 0</div>
        <div class="mt1">Margin Top 1</div>
        <div class="mt2">Margin Top 2</div>
        <div class="mt3">Margin Top 3</div>
        <div class="mt4">Margin Top 4</div>
        <div class="mt5">Margin Top 5</div>
        <div class="mt6">Margin Top 6</div>
        <div class="mt7">Margin Top 7</div>
        <div class="mt8">Margin Top 8</div>
        <div class="mt9">Margin Top 9</div>
        <div class="mt10">Margin Top 10</div>
        <div class="mt11">Margin Top 11</div>
        <div class="mt12">Margin Top 12</div>
        <h2 data-anchor="Bottom Margin Spacing" class="sg-section__subheading"><span>Bottom Margin Spacing</span></h2>
        <div class="mb0">Margin Bottom 0</div>
        <div class="mb1">Margin Bottom 1</div>
        <div class="mb2">Margin Bottom 2</div>
        <div class="mb3">Margin Bottom 3</div>
        <div class="mb4">Margin Bottom 4</div>
        <div class="mb5">Margin Bottom 5</div>
        <div class="mb6">Margin Bottom 6</div>
        <div class="mb7">Margin Bottom 7</div>
        <div class="mb8">Margin Bottom 8</div>
        <div class="mb9">Margin Bottom 9</div>
        <div class="mb10">Margin Bottom 10</div>
        <div class="mb11">Margin Bottom 11</div>
        <div class="mb12">Margin Bottom 12</div>
<code>
<pre>
<?php
$html = <<<END
<div class="mt0">Margin Top 0</div>
<div class="mt1">Margin Top 1</div>
<div class="mt2">Margin Top 2</div>
<div class="mt3">Margin Top 3</div>
<div class="mt4">Margin Top 4</div>
<div class="mt5">Margin Top 5</div>
<div class="mt6">Margin Top 6</div>
<div class="mt7">Margin Top 7</div>
<div class="mt8">Margin Top 8</div>
<div class="mt9">Margin Top 9</div>
<div class="mt10">Margin Top 10</div>
<div class="mt11">Margin Top 11</div>
<div class="mt12">Margin Top 12</div>
<div class="mb0">Margin Bottom 0</div>
<div class="mb1">Margin Bottom 1</div>
<div class="mb2">Margin Bottom 2</div>
<div class="mb3">Margin Bottom 3</div>
<div class="mb4">Margin Bottom 4</div>
<div class="mb5">Margin Bottom 5</div>
<div class="mb6">Margin Bottom 6</div>
<div class="mb7">Margin Bottom 7</div>
<div class="mb8">Margin Bottom 8</div>
<div class="mb9">Margin Bottom 9</div>
<div class="mb10">Margin Bottom 10</div>
<div class="mb11">Margin Bottom 11</div>
<div class="mb12">Margin Bottom 12</div>
END;
echo htmlentities($html);
?>
</pre>
</code>
</div>
      <div class="medium-6 columns">
        <h2 data-anchor="Top Padding Spacing" class="sg-section__subheading"><span>Top Padding Spacing</span></h2>
        <div class="pt0">Padding Top 0</div>
        <div class="pt1">Padding Top 1</div>
        <div class="pt2">Padding Top 2</div>
        <div class="pt3">Padding Top 3</div>
        <div class="pt4">Padding Top 4</div>
        <div class="pt5">Padding Top 5</div>
        <div class="pt6">Padding Top 6</div>
        <div class="pt7">Padding Top 7</div>
        <div class="pt8">Padding Top 8</div>
        <div class="pt9">Padding Top 9</div>
        <div class="pt10">Padding Top 10</div>
        <div class="pt11">Padding Top 11</div>
        <div class="pt12">Padding Top 12</div>
        <h2 data-anchor="Bottom Padding Spacing" class="sg-section__subheading"><span>Bottom Padding Spacing</span></h2>
        <div class="pb0">Padding Bottom 0</div>
        <div class="pb1">Padding Bottom 1</div>
        <div class="pb2">Padding Bottom 2</div>
        <div class="pb3">Padding Bottom 3</div>
        <div class="pb4">Padding Bottom 4</div>
        <div class="pb5">Padding Bottom 5</div>
        <div class="pb6">Padding Bottom 6</div>
        <div class="pb7">Padding Bottom 7</div>
        <div class="pb8">Padding Bottom 8</div>
        <div class="pb9">Padding Bottom 9</div>
        <div class="pb10">Padding Bottom 10</div>
        <div class="pb11">Padding Bottom 11</div>
        <div class="pb12">Padding Bottom 12</div>
<code>
<pre>
<?php
$html = <<<END
<div class="pt0">Padding Top 0</div>
<div class="pt1">Padding Top 1</div>
<div class="pt2">Padding Top 2</div>
<div class="pt3">Padding Top 3</div>
<div class="pt4">Padding Top 4</div>
<div class="pt5">Padding Top 5</div>
<div class="pt6">Padding Top 6</div>
<div class="pt7">Padding Top 7</div>
<div class="pt8">Padding Top 8</div>
<div class="pt9">Padding Top 9</div>
<div class="pt10">Padding Top 10</div>
<div class="pt11">Padding Top 11</div>
<div class="pt12">Padding Top 12</div>
<div class="pb0">Padding Bottom 0</div>
<div class="pb1">Padding Bottom 1</div>
<div class="pb2">Padding Bottom 2</div>
<div class="pb3">Padding Bottom 3</div>
<div class="pb4">Padding Bottom 4</div>
<div class="pb5">Padding Bottom 5</div>
<div class="pb6">Padding Bottom 6</div>
<div class="pb7">Padding Bottom 7</div>
<div class="pb8">Padding Bottom 8</div>
<div class="pb9">Padding Bottom 9</div>
<div class="pb10">Padding Bottom 10</div>
<div class="pb11">Padding Bottom 11</div>
<div class="pb12">Padding Bottom 12</div>
END;
echo htmlentities($html);
?>
</pre>
</code>
  </div>
    </div>
  </div>
</section>
<!--End Spacing-->
<!--Begin Buttons-->
<section class="sg-section">
  <div class="row row-site column">
    <h1 data-anchor="Buttons" class="sg-section__heading"><span>4</span> Buttons</h1>
    <h2 data-anchor="Standard Buttons" class="sg-section__subheading"><span>Standard Buttons</span></h2>
    <div class="row">
      <div class="medium-4 columns"> <a class="button large waves-effect" href="#">Primary Large</a>
        <br>
        <a class="button waves-effect" href="#">Primary Default</a>
        <br>
        <a class="button stroke waves-effect" href="#">Primary Stroke</a>
        <br>
        <a class="button tiny" href="#">Primary Tiny</a> </div>
      <div class="medium-4 columns"> <a class="button secondary large waves-effect" href="#">Secondary Large</a>
        <br>
        <a class="button secondary waves-effect" href="#">Secondary Default</a>
        <br>
        <a class="button secondary stroke waves-effect" href="#">Secondary Stroke</a>
        <br>
        <a class="button secondary tiny waves-effect" href="#">Secondary Tiny</a> </div>
      <div class="medium-4 columns"> <a class="button tertiary large waves-effect" href="#">Tertiary Large</a>
        <br>
        <a class="button tertiary waves-effect" href="#">Tertiary Default</a>
        <br>
        <a class="button tertiary stroke waves-effect" href="#">Tertiary Stroke</a>
        <br>
        <a class="button tertiary tiny waves-effect" href="#">Tertiary Tiny</a> </div>
    </div>
    <p><a class="button disabled" href="#">Disabled Button</a> </p>
    <p><a class="button expand" href="#">Expanded Button</a> </p>
<code>
<pre>
<?php
$html = <<<END
<a class="button waves-effect large" href="#">Primary Large</a>
<a class="button waves-effect" href="#">Primary Default</a>
<a class="button waves-effect stroke" href="#">Primary Default</a>
<a class="button waves-effect tiny" href="#">Primary Tiny</a>
<a class="button waves-effect secondary large" href="#">Secondary Large</a>
<a class="button waves-effect secondary" href="#">Secondary Default</a>
<a class="button waves-effect secondary stroke" href="#">Secondary Default</a>
<a class="button waves-effect secondary tiny" href="#">Secondary Tiny</a>
<a class="button waves-effect tertiary large" href="#">Tertiary Large</a>
<a class="button waves-effect tertiary" href="#">Tertiary Default</a>
<a class="button waves-effect tertiary stroke" href="#">Tertiary Default</a>
<a class="button waves-effect tertiary tiny" href="#">Tertiary Tiny</a>
<a class="button disabled" href="#">Disabled Button</a>
<a class="button expand" href="#">Expanded Button</a>
END;
echo htmlentities($html);
?>
</pre>
</code>

    <h2 data-anchor="Text Buttons" class="sg-section__subheading"><span>Text Buttons</span></h2>
    <div class="row">
      <div class="medium-6 columns"> <a href="#" class="text-button">Text Button Primary</a>
        <br>
        <a href="#" class="text-button secondary">Text Button Secondary</a>
        <br>
        <a href="#" class="text-button tertiary">Text Button Secondary</a>
        <br>
      </div>
      <div class="medium-6 columns"> <a href="#" class="text-button tiny">Small Text Button Primary</a>
        <br>
        <a href="#" class="text-button secondary tiny">Small Text Button Secondary</a>
        <br>
        <a href="#" class="text-button tertiary tiny">Small Text Button Secondary</a> </div>
    </div>
<code>
<pre>
<?php
$html = <<<END
<a href="#" class="text-button">Text Button Primary</a>
<a href="#" class="text-button secondary">Text Button Secondary</a>
<a href="#" class="text-button tertiary">Text Button Secondary</a>
<a href="#" class="text-button tiny">Small Text Button Primary</a>
<a href="#" class="text-button secondary tiny">Small Text Button Secondary</a>
<a href="#" class="text-button tertiary tiny">Small Text Button Secondary</a>
END;
echo htmlentities($html);
?>
</pre>
</code>
 </div>
</section>
<!--End Buttons-->
<!--Begin Forms-->
<section class="sg-section">
  <div class="row row-site column">
    <h1 data-anchor="Forms" class="sg-section__heading"><span>5</span> Forms</h1>
    <form>
      <div class="row column">
        <label>Input Label
          <input type="text" placeholder=".row.column">
        </label>
      </div>
      <div class="row">
        <div class="large-4 columns">
          <label>Input Label
            <input type="text" placeholder=".large-4.columns">
          </label>
        </div>
        <div class="large-4 columns">
          <label>Input Label
            <input type="text" placeholder=".large-4.columns">
          </label>
        </div>
        <div class="large-4 columns">
          <label>Input Label
            <input type="text" placeholder=".large-4.columns">
          </label>
        </div>
      </div>
      <div class="row column">
        <label>Select Box
          <select>
            <option value="husker">Husker</option>
            <option value="starbuck">Starbuck</option>
            <option value="hotdog">Hot Dog</option>
            <option value="apollo">Apollo</option>
          </select>
        </label>
      </div>
      <div class="row">
        <div class="large-6 columns mb3">
          <label>Choose Your Favorite</label>
          <div class="radio">
            <label>
              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
              <span></span> Radio 1 </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
              <span></span> Radio 2 </label>
          </div>
        </div>
        <div class="large-6 columns mb3">
          <label>Check these out</label>
          <div class="checkbox">
            <label>
              <input type="checkbox">
              <span></span> Checkbox 1 </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox">
              <span></span> Checkbox 1 </label>
          </div>
        </div>
      </div>
      <div class="row column">
        <label>Enable Some Fun</label>
        <label class="switch">
          <input type="checkbox">
          <span></span> </label>
      </div>
      <div class="row column">
        <label>Textarea Label
          <textarea rows="8" placeholder=".row.column"></textarea>
        </label>
      </div>
      <div class="row column">
        <button type="submit" class="button">Submit</button>
      </div>
    </form>
<code>
<pre>
<?php
$html = <<<END
<form>
  <div class="row column">
    <label>Input Label
      <input type="text" placeholder=".row.column">
    </label>
  </div>
  <div class="row">
    <div class="large-4 columns">
      <label>Input Label
        <input type="text" placeholder=".large-4.columns">
      </label>
    </div>
    <div class="large-4 columns">
      <label>Input Label
        <input type="text" placeholder=".large-4.columns">
      </label>
    </div>
    <div class="large-4 columns">
      <label>Input Label
        <input type="text" placeholder=".large-4.columns">
      </label>
    </div>
  </div>
  <div class="row column">
    <label>Select Box
      <select>
        <option value="husker">Husker</option>
        <option value="starbuck">Starbuck</option>
        <option value="hotdog">Hot Dog</option>
        <option value="apollo">Apollo</option>
      </select>
    </label>
  </div>
  <div class="row">
    <div class="large-6 columns mb3">
      <label>Choose Your Favorite</label>
      <label class="input-radio">
        <input type="radio" name="pokemon" value="Red" id="pokemonRed">
        Red </label>
      <label class="input-radio">
        <input type="radio" name="pokemon" value="Blue" id="pokemonBlue">
        Blue </label>
    </div>
    <div class="large-6 columns mb3">
      <label>Check these out</label>
      <label class="input-checkbox">
        <input id="checkbox1" type="checkbox">
        Checkbox 1</label>
      <label class="input-checkbox">
        <input id="checkbox2" type="checkbox">
        Checkbox 2</label>
    </div>
  </div>
  <div class="row column">
    <label>Textarea Label
      <textarea rows="8" placeholder=".row.column"></textarea>
    </label>
  </div>
  <div class="row column">
    <button type="submit" class="button">Submit</button>
  </div>
</form>
END;
echo htmlentities($html);
?>
</pre>
</code>
   </div>
</section>
<!--End Forms-->
<!--Begin Grids-->
<section class="sg-section">
  <div class="row row-site column">
    <h1 data-anchor="Grids" class="sg-section__heading"><span>6</span> Grids</h1>
    <!--Begin Grids - Grid-->
    <h2 data-anchor="Standard Grid" class="sg-section__subheading"><span>Standard Grid</span></h2>
    <p>Grid system is based on <a href="http://foundation.zurb.com/sites/docs/grid.html" target="_blank">Foundations Grid</a> please reference docs for more information.</p>
    <p><strong>Sites breakpoints:</strong>
      <br> xsmall (0 to 479px)
      <br> small (480px - 639px)
      <br> medium (640px - 800px)
      <br> large (801px - 959px)
      <br> xlarge (960px - 1199px)
      <br> xxlarge (1200px and up)</p>
    <div class="row">
      <div class="medium-6 column">
        <p><strong>Two column desktop/tablet; Single column phone</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam odio adipisci distinctio porro accusamus dolores nam, dignissimos nesciunt accusantium pariatur incidunt omnis tempora excepturi optio architecto. Provident praesentium enim libero necessitatibus unde ea mollitia tempore atque adipisci ipsa velit dolorum accusantium, fugiat, rem ipsam, nesciunt eum excepturi. Maxime, enim, nobis.</p>
      </div>
      <div class="medium-6 column">
        <p><strong>Two column desktop/tablet; Single column phone</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam odio adipisci distinctio porro accusamus dolores nam, dignissimos nesciunt accusantium pariatur incidunt omnis tempora excepturi optio architecto. Provident praesentium enim libero necessitatibus unde ea mollitia tempore atque adipisci ipsa velit dolorum accusantium, fugiat, rem ipsam, nesciunt eum excepturi. Maxime, enim, nobis.</p>
      </div>
    </div>
    <div class="row">
      <div class="medium-6 large-3 column">
        <p><strong>Four column desktop; Two column tablet; Single column phone</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam odio adipisci distinctio porro accusamus dolores nam, dignissimos nesciunt accusantium pariatur incidunt omnis tempora excepturi optio architecto. Provident praesentium enim libero necessitatibus unde ea mollitia tempore atque adipisci.</p>
      </div>
      <div class="medium-6 large-3 column">
        <p><strong>Four column desktop; Two column tablet; Single column phone</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam odio adipisci distinctio porro accusamus dolores nam, dignissimos nesciunt accusantium pariatur incidunt omnis tempora excepturi optio architecto. Provident praesentium enim libero necessitatibus unde ea mollitia tempore atque adipisci.</p>
      </div>
      <div class="medium-6 large-3 column">
        <p><strong>Four column desktop; Two column tablet; Single column phone</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam odio adipisci distinctio porro accusamus dolores nam, dignissimos nesciunt accusantium pariatur incidunt omnis tempora excepturi optio architecto. Provident praesentium enim libero necessitatibus unde ea mollitia tempore atque adipisci.</p>
      </div>
      <div class="medium-6 large-3 column">
        <p><strong>Four column desktop; Two column tablet; Single column phone</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam odio adipisci distinctio porro accusamus dolores nam, dignissimos nesciunt accusantium pariatur incidunt omnis tempora excepturi optio architecto. Provident praesentium enim libero necessitatibus unde ea mollitia tempore atque adipisci.</p>
      </div>
    </div>
<code>
<pre>
<?php
$html = <<<END
<div class="row">
  <div class="medium-6 column">
    <p><strong>Two column desktop/tablet; Single column phone</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam odio adipisci distinctio porro accusamus dolores nam, dignissimos nesciunt accusantium pariatur incidunt omnis tempora excepturi optio architecto. Provident praesentium enim libero necessitatibus unde ea mollitia tempore atque adipisci ipsa velit dolorum accusantium, fugiat, rem ipsam, nesciunt eum excepturi. Maxime, enim, nobis.</p>
  </div>
  <div class="medium-6 column">
    <p><strong>Two column desktop/tablet; Single column phone</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam odio adipisci distinctio porro accusamus dolores nam, dignissimos nesciunt accusantium pariatur incidunt omnis tempora excepturi optio architecto. Provident praesentium enim libero necessitatibus unde ea mollitia tempore atque adipisci ipsa velit dolorum accusantium, fugiat, rem ipsam, nesciunt eum excepturi. Maxime, enim, nobis.</p>
  </div>
</div>
<div class="row">
  <div class="medium-6 large-3 column">
    <p><strong>Four column desktop; Two column tablet; Single column phone</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam odio adipisci distinctio porro accusamus dolores nam, dignissimos nesciunt accusantium pariatur incidunt omnis tempora excepturi optio architecto. Provident praesentium enim libero necessitatibus unde ea mollitia tempore atque adipisci.</p>
  </div>
  <div class="medium-6 large-3 column">
    <p><strong>Four column desktop; Two column tablet; Single column phone</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam odio adipisci distinctio porro accusamus dolores nam, dignissimos nesciunt accusantium pariatur incidunt omnis tempora excepturi optio architecto. Provident praesentium enim libero necessitatibus unde ea mollitia tempore atque adipisci.</p>
  </div>
  <div class="medium-6 large-3 column">
    <p><strong>Four column desktop; Two column tablet; Single column phone</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam odio adipisci distinctio porro accusamus dolores nam, dignissimos nesciunt accusantium pariatur incidunt omnis tempora excepturi optio architecto. Provident praesentium enim libero necessitatibus unde ea mollitia tempore atque adipisci.</p>
  </div>
   <div class="medium-6 large-3 column">
    <p><strong>Four column desktop; Two column tablet; Single column phone</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam odio adipisci distinctio porro accusamus dolores nam, dignissimos nesciunt accusantium pariatur incidunt omnis tempora excepturi optio architecto. Provident praesentium enim libero necessitatibus unde ea mollitia tempore atque adipisci.</p>
  </div>
</div>
END;
echo htmlentities($html);
?>
</pre>
</code>

    <!--End Grids - Grid-->
    <!--Begin Grids - Block Grid-->
    <h2 data-anchor="Block Grid" class="sg-section__subheading"><span>Block Grid</span></h2>
    <div class="row xsmall-up-1 small-up-2 medium-up-3 large-up-4 xlarge-up-5 xxlarge-up-6">
      <div class="column"> <img src="https://placehold.it/350x300" class="mb3 border"> </div>
      <div class="column"> <img src="https://placehold.it/350x300" class="mb3 border"> </div>
      <div class="column"> <img src="https://placehold.it/350x300" class="mb3 border"> </div>
      <div class="column"> <img src="https://placehold.it/350x300" class="mb3 border"> </div>
      <div class="column"> <img src="https://placehold.it/350x300" class="mb3 border"> </div>
      <div class="column"> <img src="https://placehold.it/350x300" class="mb3 border"> </div>
    </div>
<code>
<pre>
<?php
$html = <<<END
<div class="row xsmall-up-1 small-up-2 medium-up-3 large-up-4 xlarge-up-5 xxlarge-up-6">
  <div class="column"> <img src="https://placehold.it/350x300" class="mb3 border"> </div>
  <div class="column"> <img src="https://placehold.it/350x300" class="mb3 border"> </div>
  <div class="column"> <img src="https://placehold.it/350x300" class="mb3 border"> </div>
  <div class="column"> <img src="https://placehold.it/350x300" class="mb3 border"> </div>
  <div class="column"> <img src="https://placehold.it/350x300" class="mb3 border"> </div>
  <div class="column"> <img src="https://placehold.it/350x300" class="mb3 border"> </div>
</div>
END;
echo htmlentities($html);
?>
</pre>
</code>

    <!--End Grids - Block Grid-->
  </div>
</section>
<!--End Grids-->
<!--Begin Page Body Components-->
<section class="sg-section">
  <div class="row row-site column">
    <h1 data-anchor="Page Body Components" class="sg-section__heading"><span>7</span> Page Body Components</h1>
    <!--Begin Page Body Components - Slide Content-->
    <h2 data-anchor="Slide Content" class="sg-section__subheading"><span>Slide Content</span></h2>
    <h3>Slide Toggle With Link</h3>
    <p>Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
    <div class="slide-toggle-container">
      <p> <a class="slide-toggle" href="#">More Info</a> </p>
      <div class="slide-content">
        <p>enean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce commodo aliquam arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas tristique nibh. In hac habitasse platea dictumst. Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
        <p>enean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce commodo aliquam arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas tristique nibh. In hac habitasse platea dictumst. Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
      </div>
    </div>
    <h3>Slide Toggle With Button</h3>
    <p>enean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce commodo aliquam arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas tristique nibh. In hac habitasse platea dictumst. Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
    <div class="slide-toggle-container"> <a class="slide-toggle button" href="#"> More Info</a>
      <div class="slide-content">
        <p>enean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce commodo aliquam arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas tristique nibh. In hac habitasse platea dictumst. Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
        <p>enean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce commodo aliquam arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas tristique nibh. In hac habitasse platea dictumst. Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
      </div>
    </div>
<code>
<pre>
<?php
$html = <<<END
<h3>Slide Toggle With Link</h3>
<p>Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus
laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula,
eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
<div class="slide-toggle-container">
<p> <a class="slide-toggle" href="#">More Info</a> </p>
<div class="slide-content">
  <p>enean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce commodo aliquam arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas tristique nibh. In hac habitasse platea dictumst. Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
  <p>enean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce commodo aliquam arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas tristique nibh. In hac habitasse platea dictumst. Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
</div>
</div>
<h3>Slide Toggle With Button</h3>
<p>enean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce commodo aliquam arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas tristique nibh. In hac habitasse platea dictumst. Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
<div class="slide-toggle-container"> <a class="slide-toggle button" href="#"> More Info</a>
<div class="slide-content">
  <p>enean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce commodo aliquam arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas tristique nibh. In hac habitasse platea dictumst. Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
  <p>enean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce commodo aliquam arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent egestas tristique nibh. In hac habitasse platea dictumst. Ut a nisl id ante tempus hendrerit. Phasellus ullamcorper ipsum rutrum nunc. Vivamus laoreet. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Praesent egestas neque eu enim.</p>
</div>
</div>
END;
echo htmlentities($html);
?>
</pre>
</code>

    <!--End Page Body Components - Slide Content-->
    <!--Begin Page Body Components - Accordion-->
    <h2 data-anchor="Accordion" class="sg-section__subheading"><span>Accordion</span></h2>
    <h2>Accordion</h2>
    <dl class="accordion">
      <dt>FAQ Question 1. Pellentesque dapibus hendrerit tortor. Donec vitae orci sed dolor?</dt>
      <dd>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc. Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</dd>
      <dt>FAQ Question 2. Pellentesque dapibus hendrerit tortor. Donec vitae orci sed dolor?</dt>
      <dd>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc. Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</dd>
      <dt>FAQ Question 3. Pellentesque dapibus hendrerit tortor. Donec vitae orci sed dolor?</dt>
      <dd>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc. Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</dd>
    </dl>
<code>
<pre>
<?php
$html = <<<END
<dl class="accordion">
<dt>FAQ Question 1. Pellentesque dapibus hendrerit tortor. Donec vitae orci sed dolor?</dt>
<dd>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc. Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</dd>
<dt>FAQ Question 2. Pellentesque dapibus hendrerit tortor. Donec vitae orci sed dolor?</dt>
<dd>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc. Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</dd>
<dt>FAQ Question 3. Pellentesque dapibus hendrerit tortor. Donec vitae orci sed dolor?</dt>
<dd>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc. Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</dd>
</dl>
END;
echo htmlentities($html);
?>
</pre>
</code>

    <!--End Page Body Components - Accordion-->
    <!--Begin Page Body Components - Vertical Tabs-->
    <h2 data-anchor="Vertical Tabs" class="sg-section__subheading"><span>Vertical Tabs</span></h2>
    <div class="resp-tabs resp-tabs--vertical">
      <ul class="resp-tabs-list resp-tabs-group">
        <li>Tab 1</li>
        <li>Tab 2</li>
        <li>Tab 3</li>
      </ul>
      <div class="resp-tabs-container resp-tabs-group">
        <div>
          <p>Chicago has a number of successful incubators that help entrepreneurs get their start-ups off the ground, but incubation is only the beginning. We help entrepreneurs go beyond the basics, providing engagement and insight on how to execute a successful business plan, grow your team, and cultivate better products and services.</p>
        </div>
        <div>
          <p>Accelerators provide instruction and create opportunities for investment. While The Cultivator creates similar opportunities, we do not “graduate” companies after a few months or weeks of instruction. The Cultivator partners with growing businesses that can benefit from the accountabilities, measurement, experience, guidance, and investment of our Members.</p>
        </div>
        <div>
          <p>The Cultivator has an active investment fund which we use to accelerate the growth and potential of companies that partner with us, but our investment goes beyond capital. We help business owners make the most of their resources, including capital, talent, and tech. Our holistic approach to business development enables entrepreneurs to do more with the resources they already have while considering new, viable alternatives when needed.</p>
        </div>
      </div>
    </div>
<code>
<pre>
<?php
$html = <<<END
<div class="resp-tabs resp-tabs--vertical">
  <ul class="resp-tabs-list resp-tabs-group">
    <li>Tab 1</li>
    <li>Tab 2</li>
    <li>Tab 3</li>
  </ul>
  <div class="resp-tabs-container resp-tabs-group">
    <div>
      <p>Chicago has a number of successful incubators that help entrepreneurs get their start-ups off the ground, but incubation is only the beginning. We help
        entrepreneurs go beyond the basics, providing engagement and insight on how to execute a successful business plan, grow your team, and cultivate better
        products and services.</p>
    </div>
    <div>
      <p>Accelerators provide instruction and create opportunities for investment. While The Cultivator creates similar opportunities, we do not “graduate” companies
        after a few months or weeks of instruction. The Cultivator partners with growing businesses that can benefit from the accountabilities, measurement,
        experience, guidance, and investment of our Members.</p>
    </div>
    <div>
      <p>The Cultivator has an active investment fund which we use to accelerate the growth and potential of companies that partner with us, but our investment
        goes beyond capital. We help business owners make the most of their resources, including capital, talent, and tech. Our holistic approach to business
        development enables entrepreneurs to do more with the resources they already have while considering new, viable alternatives when needed.</p>
    </div>
  </div>
</div>
END;
echo htmlentities($html);
?>
</pre>
</code>
      <!--End Page Body Components - Vertical Tabs-->
    <!--Begin Page Body Components - Horizontal Tabs-->
    <h2 data-anchor="Horizontal Tabs" class="sg-section__subheading"><span>Horizontal Tabs</span></h2>
    <div class="resp-tabs resp-tabs--horizontal">
      <ul class="resp-tabs-list resp-tabs-group">
        <li>Tab 1</li>
        <li>Tab 2</li>
        <li>Tab 3</li>
      </ul>
      <div class="resp-tabs-container resp-tabs-group">
        <div>
          <p>Chicago has a number of successful incubators that help entrepreneurs get their start-ups off the ground, but incubation is only the beginning. We help entrepreneurs go beyond the basics, providing engagement and insight on how to execute a successful business plan, grow your team, and cultivate better products and services.</p>
        </div>
        <div>
          <p>Accelerators provide instruction and create opportunities for investment. While The Cultivator creates similar opportunities, we do not “graduate” companies after a few months or weeks of instruction. The Cultivator partners with growing businesses that can benefit from the accountabilities, measurement, experience, guidance, and investment of our Members.</p>
        </div>
        <div>
          <p>The Cultivator has an active investment fund which we use to accelerate the growth and potential of companies that partner with us, but our investment goes beyond capital. We help business owners make the most of their resources, including capital, talent, and tech. Our holistic approach to business development enables entrepreneurs to do more with the resources they already have while considering new, viable alternatives when needed.</p>
        </div>
      </div>
    </div>
<code>
<pre>
<?php
$html = <<<END
<div class="resp-tabs resp-tabs--horizontal">
  <ul class="resp-tabs-list resp-tabs-group">
    <li>Tab 1</li>
    <li>Tab 2</li>
    <li>Tab 3</li>
  </ul>
  <div class="resp-tabs-container resp-tabs-group">
    <div>
      <p>Chicago has a number of successful incubators that help entrepreneurs get their start-ups off the ground, but incubation is only the beginning. We help entrepreneurs go beyond the basics, providing engagement and insight on how to execute a successful business plan, grow your team, and cultivate better products and services.</p>
    </div>
    <div>
      <p>Accelerators provide instruction and create opportunities for investment. While The Cultivator creates similar opportunities, we do not “graduate” companies after a few months or weeks of instruction. The Cultivator partners with growing businesses that can benefit from the accountabilities, measurement, experience, guidance, and investment of our Members.</p>
    </div>
    <div>
      <p>The Cultivator has an active investment fund which we use to accelerate the growth and potential of companies that partner with us, but our investment goes beyond capital. We help business owners make the most of their resources, including capital, talent, and tech. Our holistic approach to business development enables entrepreneurs to do more with the resources they already have while considering new, viable alternatives when needed.</p>
    </div>
  </div>
</div>
END;
echo htmlentities($html);
?>
</pre>
</code>

    <!--End Page Body Components - Horizontal Tabs-->
    <!--Begin Page Body Components - Tables-->
    <h2 data-anchor="Tables" class="sg-section__subheading"><span>Tables</span></h2>
    <table class="table">
      <thead>
        <tr>
          <th>Table Header</th>
          <th>Table Header</th>
          <th>Table Header</th>
          <th>Table Header</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Content Goes Here</td>
          <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
          <td>Content Goes Here</td>
          <td>Content Goes Here</td>
        </tr>
        <tr>
          <td>Content Goes Here</td>
          <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
          <td>Content Goes Here</td>
          <td>Content Goes Here</td>
        </tr>
        <tr>
          <td>Content Goes Here</td>
          <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
          <td>Content Goes Here</td>
          <td>Content Goes Here</td>
        </tr>
      </tbody>
    </table>
<code>
<pre>
<?php
$html = <<<END
<table class="table">
<thead>
  <tr>
    <th>Table Header</th>
    <th>Table Header</th>
    <th>Table Header</th>
    <th>Table Header</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>Content Goes Here</td>
    <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
    <td>Content Goes Here</td>
    <td>Content Goes Here</td>
  </tr>
  <tr>
    <td>Content Goes Here</td>
    <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
    <td>Content Goes Here</td>
    <td>Content Goes Here</td>
  </tr>
  <tr>
    <td>Content Goes Here</td>
    <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
    <td>Content Goes Here</td>
    <td>Content Goes Here</td>
  </tr>
</tbody>
</table>
END;
echo htmlentities($html);
?>
</pre>
</code>

    <!--End Page Body Components - Tables-->
  </div>
</section>
<!--End Page Body Components-->
<!--Begin System Components-->
<section class="sg-section">
  <div class="row row-site column">
    <h1 data-anchor="System Components" class="sg-section__heading"><span>8</span> System Components</h1>
    <!--Begin System Components - Alerts-->
    <h2 data-anchor="Alerts" class="sg-section__subheading"><span>Alerts</span></h2>
    <div class="alert alert-success">
      <p>This is an example successful alert message that would be used for forms or login messages <a href="#">more info</a> </p>
    </div>
    <div class="alert alert-info">
      <p>This is an example info alert message that would be used for forms or login messages <a href="#">more info</a> </p>
    </div>
    <div class="alert alert-warning">
      <p>This is an example warning alert message that would be used for forms or login messages <a href="#">more info</a> </p>
    </div>
    <div class="alert alert-danger">
      <p>This is an example danger alert message that would be used for forms or login messages <a href="#">more info</a> </p>
    </div>
<code>
<pre>
<?php
$html = <<<END
<div class="alert alert-success">
<p>This is an example successful alert message that would be used for forms or login messages <a href="#">more info</a> </p>
</div>
<div class="alert alert-info">
<p>This is an example info alert message that would be used for forms or login messages <a href="#">more info</a> </p>
</div>
<div class="alert alert-warning">
<p>This is an example warning alert message that would be used for forms or login messages <a href="#">more info</a> </p>
</div>
<div class="alert alert-danger">
<p>This is an example danger alert message that would be used for forms or login messages <a href="#">more info</a> </p>
</div>
END;
echo htmlentities($html);
?>
</pre>
</code>

    <!--End System Components - Alerts-->
  </div>
</section>
<!--End System Components-->
<!--End Style Guide-->
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/style-guide.js'></script>
