# Logos Child Theme for Standard

## Description

Child theme kit for [Logos Creative](http://logos-creative.com) themes built on [Standard 3](http://standardtheme.com).

What this *really* does is use Standard as a starting point. **All of Standard's styles and scripts are dequeued! Instead, the latest version of Bootstrap is loaded along with FitVids.js and Font Awesome.** You'll need to write your own styles. You can also uncomment the `@import` line in the `style.css` file if you just want to grab Standard's main CSS—and the same goes for some default WordPress image classes. Otherwise, remove the `wp_dequeue_style`/`wp_dequeue_script` calls in `functions.php` to get individual Standard styles back.

## Shortcodes

First of all, your content will *always* work without shortcodes—these are simply present to give you easy ways to access features of Bootstrap without having to make a page template.

The following shows the available arguments/options along with the default setting. These are shown logically 'in type', so items wrapped in quotation marks (or defaulting as null) are strings, and booleans or integers have none.

### Collapse: <a href="http://twitter.github.com/bootstrap/javascript.html#collapse" target="_blank">(Documentation)</a> ###

```[collapse title=null element="h2" open=false][/collapse]```

### Tabs: <a href="http://twitter.github.com/bootstrap/javascript.html#tabs" target="_blank">(Documentation)</a> ###

```[tabs class=null][/tabs]```

### Tab: <a href="http://twitter.github.com/bootstrap/javascript.html#tabs" target="_blank">(Documentation)</a> ###

```[tab title="default" active=false]```

### Tab Content Group: <a href="http://twitter.github.com/bootstrap/javascript.html#tabs" target="_blank">(Documentation)</a> ###

<code>[tab-content-group][/tab-content-group]</code>

### Tab Content: <a href="http://twitter.github.com/bootstrap/javascript.html#tabs" target="_blank">(Documentation)</a> ###

```[tabcontent title=null active=true][/tabcontent]```

### Buttons: <a href="http://twitter.github.com/bootstrap/base-css.html#buttons" target="_blank">(Documentation)</a> ###

```[button text=null link="#" style=null size=null icon=null iconwhite=false class=null newwindow=false]```

### Row: <a href="http://twitter.github.com/bootstrap/scaffolding.html" target="_blank">(Documentation)</a> ###

```[row fluid=false class=null][/row]```
```[inner-row fluid=false class=null][/row]```

### Span: <a href="http://twitter.github.com/bootstrap/scaffolding.html" target="_blank">(Documentation)</a> ###

```[span width=12 offset=0 class=null][/span]```
```[inner-span width=12 offset=0 class=null][/span]```
```[inner-inner-span width=12 offset=0 class=null][/span]```

### Button Group: <a href="http://twitter.github.com/bootstrap/components.html#buttonGroups" target="_blank">(Documentation)</a> ###

```[btngroup class=null][/btngroup]```

### Hero: <a href="http://twitter.github.com/bootstrap/components.html#typography" target="_blank">(Documentation)</a> ###


<code>[hero][/hero]</code>

### Icon: <a href="http://fortawesome.github.com/Font-Awesome/" target="_blank">(Documentation)</a> ###

```[icon type=null class=null]```