## Table of contents

- [\CCL\Content\Element\Basic\Button](#class-cclcontentelementbasicbutton)
- [\CCL\Content\Element\Basic\DescriptionList](#class-cclcontentelementbasicdescriptionlist)
- [\CCL\Content\Element\Basic\DescriptionListHorizontal](#class-cclcontentelementbasicdescriptionlisthorizontal)
- [\CCL\Content\Element\Basic\Font](#class-cclcontentelementbasicfont)
- [\CCL\Content\Element\Basic\Form](#class-cclcontentelementbasicform)
- [\CCL\Content\Element\Basic\Frame](#class-cclcontentelementbasicframe)
- [\CCL\Content\Element\Basic\Heading](#class-cclcontentelementbasicheading)
- [\CCL\Content\Element\Basic\Image](#class-cclcontentelementbasicimage)
- [\CCL\Content\Element\Basic\Link](#class-cclcontentelementbasiclink)
- [\CCL\Content\Element\Basic\ListContainer](#class-cclcontentelementbasiclistcontainer)
- [\CCL\Content\Element\Basic\ListItem](#class-cclcontentelementbasiclistitem)
- [\CCL\Content\Element\Basic\Meta](#class-cclcontentelementbasicmeta)
- [\CCL\Content\Element\Basic\Paragraph](#class-cclcontentelementbasicparagraph)
- [\CCL\Content\Element\Basic\Table](#class-cclcontentelementbasictable)
- [\CCL\Content\Element\Basic\TextBlock](#class-cclcontentelementbasictextblock)
- [\CCL\Content\Element\Basic\Description\Description](#class-cclcontentelementbasicdescriptiondescription)
- [\CCL\Content\Element\Basic\Description\Term](#class-cclcontentelementbasicdescriptionterm)
- [\CCL\Content\Element\Basic\Form\Input](#class-cclcontentelementbasicforminput)
- [\CCL\Content\Element\Basic\Form\Label](#class-cclcontentelementbasicformlabel)
- [\CCL\Content\Element\Basic\Form\Option](#class-cclcontentelementbasicformoption)
- [\CCL\Content\Element\Basic\Form\Select](#class-cclcontentelementbasicformselect)
- [\CCL\Content\Element\Basic\Table\Body](#class-cclcontentelementbasictablebody)
- [\CCL\Content\Element\Basic\Table\Cell](#class-cclcontentelementbasictablecell)
- [\CCL\Content\Element\Basic\Table\Footer](#class-cclcontentelementbasictablefooter)
- [\CCL\Content\Element\Basic\Table\Head](#class-cclcontentelementbasictablehead)
- [\CCL\Content\Element\Basic\Table\HeadCell](#class-cclcontentelementbasictableheadcell)
- [\CCL\Content\Element\Basic\Table\Row](#class-cclcontentelementbasictablerow)

<hr />

### Class: \CCL\Content\Element\Basic\Button

> Represents a button element.

###### Example
```
// The following code snippet creates a button which has a text and ok icon.
$b = new Button('myb', 'Demo Button', new Icon('icon', Icon::OK));
```

| Visibility | Function |
|:-----------|:---------|
| public | <em>Constructor which sets the classes and attributes of the element. Additionally you can define a text and Icon for the button. The id parameter must be set, otherwise an InvalidArgumentException is thrown.</em><br><br>Parameters: <ul><li>string <strong>$id</strong> <em>The id of the element, must be not empty</em></li><li>string <strong>$text</strong> <em>Optional text of the button</em></li><li>\CCL\Content\Element\Component\Icon <strong>$icon</strong> <em>Optional icon of the button</em></li><li>array <strong>$classes</strong> <em>The classes of the element</em></li><li>array <strong>$attributes</strong> <em>Additional attributes for the element</em></li></ul>Returns:<br><em>void</em><br><br>Call:<br><strong>__construct(</strong><em>string</em> <strong>$id</strong>, <em>string</em> <strong>$text = `''`</strong>, <em>\CCL\Content\Element\Component\Icon</em> <strong>$icon = null</strong>, <em>array</em> <strong>$classes = array()</strong>, <em>array</em> <strong>$attributes = array()</strong>)</strong> |

*This class extends \CCL\Content\Element\Basic\Container*

<hr />

### Class: \CCL\Content\Element\Basic\DescriptionList

> Represents a description list element.

###### Example
```
// The following code snippet creates a description list.
$dl = new DescriptionList('mydl');
$dl->setTerm(new Term('t'))->setContent('My Term');
$dl->setDescription(new Description('d'))->setContent('My Description');
```

| Visibility | Function |
|:-----------|:---------|
| public | <em>Constructor which sets the classes and attributes of the element. The id parameter must be set, otherwise an InvalidArgumentException is thrown.</em><br><br>Parameters: <ul><li>string <strong>$id</strong> <em>The id of the element, must be not empty</em></li><li>array <strong>$classes</strong> <em>The classes of the element</em></li><li>array <strong>$attributes</strong> <em>Additional attributes for the element</em></li></ul>Returns:<br><em>void</em><br><br>Call:<br><strong>__construct(</strong><em>string</em> <strong>$id</strong>, <em>array</em> <strong>$classes = array()</strong>, <em>array</em> <strong>$attributes = array()</strong>)</strong> |
| public | <em>Defines the Description of the list. The given Description is returned for chaining calls.</em><br><br>Parameters: <ul><li>\CCL\Content\Element\Basic\Description\Description <strong>$description</strong> <em></em></li></ul>Returns:<br><em>[\CCL\Content\Element\Basic\Description\Description](#class-cclcontentelementbasicdescriptiondescription)</em><br><br>Call:<br><strong>setDescription(</strong><em>[\CCL\Content\Element\Basic\Description\Description](#class-cclcontentelementbasicdescriptiondescription)</em> <strong>$description</strong>)</strong> |
| public | <em>Defines the Term of the list. The given Term is returned for chaining calls.</em><br><br>Parameters: <ul><li>\CCL\Content\Element\Basic\Description\Term <strong>$term</strong> <em></em></li></ul>Returns:<br><em>[\CCL\Content\Element\Basic\Description\Term](#class-cclcontentelementbasicdescriptionterm)</em><br><br>Call:<br><strong>setTerm(</strong><em>[\CCL\Content\Element\Basic\Description\Term](#class-cclcontentelementbasicdescriptionterm)</em> <strong>$term</strong>)</strong> |

*This class extends \CCL\Content\Element\Basic\Container*

<hr />

### Class: \CCL\Content\Element\Basic\DescriptionListHorizontal

> Represents a horizontal description list element.

###### Example
```
// The following code snippet creates a horizontal description list.
$dl = new DescriptionListHorizontal('mydl');
$dl->setTerm(new Term('t'))->setContent('My Term');
$dl->setDescription(new Description('d'))->setContent('My Description');
```

| Visibility | Function |
|:-----------|:---------|
| public | <em>Constructor which sets the classes and attributes of the element. The id parameter must be set, otherwise an InvalidArgumentException is thrown.</em><br><br>Parameters: <ul><li>string <strong>$id</strong> <em>The id of the element, must be not empty</em></li><li>array <strong>$classes</strong> <em>The classes of the element</em></li><li>array <strong>$attributes</strong> <em>Additional attributes for the element</em></li></ul>Returns:<br><em>void</em><br><br>Call:<br><strong>__construct(</strong><em>string</em> <strong>$id</strong>, <em>array</em> <strong>$classes = array()</strong>, <em>array</em> <strong>$attributes = array()</strong>)</strong> |

*This class extends [\CCL\Content\Element\Basic\DescriptionList](#class-cclcontentelementbasicdescriptionlist)*

<hr />

### Class: \CCL\Content\Element\Basic\Font

> Represents a font element.

###### Example
```
// The following code snippet creates a font.
$f = new Font('myfont');
```

| Visibility | Function |
|:-----------|:---------|
| public | <em>Constructor which sets the classes and attributes of the element. The id parameter must be set, otherwise an InvalidArgumentException is thrown.</em><br><br>Parameters: <ul><li>string <strong>$id</strong> <em>The id of the element, must be not empty</em></li><li>array <strong>$classes</strong> <em>The classes of the element</em></li><li>array <strong>$attributes</strong> <em>Additional attributes for the element</em></li></ul>Returns:<br><em>void</em><br><br>Call:<br><strong>__construct(</strong><em>string</em> <strong>$id</strong>, <em>array</em> <strong>$classes = array()</strong>, <em>array</em> <strong>$attributes = array()</strong>)</strong> |

*This class extends \CCL\Content\Element\Basic\Container*

<hr />

### Class: \CCL\Content\Element\Basic\Form

> Represents a form element.

###### Example
```
// The following code snippet creates a form.
$f = new Form('myform', 'url/to/form.html', 'myForm', 'GET');
```

| Visibility | Function |
|:-----------|:---------|
| public | <em>Constructor which sets the classes and attributes of the element. The action attribute must be a url and the name given to successfully create a form element. The id, action and name parameter must be set, otherwise an InvalidArgumentException is thrown.</em><br><br>Parameters: <ul><li>string <strong>$id</strong> <em>The id of the element, must be not empty</em></li><li>string <strong>$action</strong> <em>The action if the form</em></li><li>string <strong>$name</strong> <em>The name of the form</em></li><li>string <strong>$method</strong> <em>The method of the form, can be GET or POST</em></li><li>array <strong>$classes</strong> <em>The classes of the element</em></li><li>array <strong>$attributes</strong> <em>Additional attributes for the element</em></li></ul>Returns:<br><em>void</em><br><br>Call:<br><strong>__construct(</strong><em>string</em> <strong>$id</strong>, <em>string</em> <strong>$action</strong>, <em>string</em> <strong>$name</strong>, <em>string</em> <strong>$method = `'POST'`</strong>, <em>array</em> <strong>$classes = array()</strong>, <em>array</em> <strong>$attributes = array()</strong>)</strong> |

*This class extends \CCL\Content\Element\Basic\Container*

<hr />

### Class: \CCL\Content\Element\Basic\Frame

> Represents a frame element.

###### Example
```
// The following code snippet creates a frame.
$f = new Frame('myframe', 'url/to/embed.html');
```

| Visibility | Function |
|:-----------|:---------|
| public | <em>Constructor which sets the classes and attributes of the element. The src attribute can be a url which should be embedded by this frame.</em><br><br>Parameters: <ul><li>string <strong>$id</strong> <em>The id of the element, must be not empty</em></li><li>string <strong>$src</strong> <em>The src url to embed</em></li><li>array <strong>$classes</strong> <em>The classes of the element</em></li><li>array <strong>$attributes</strong> <em>Additional attributes for the element</em></li></ul>Returns:<br><em>void</em><br><br>Call:<br><strong>__construct(</strong><em>string</em> <strong>$id</strong>, <em>string</em> <strong>$src</strong>, <em>array</em> <strong>$classes = array()</strong>, <em>array</em> <strong>$attributes = array()</strong>)</strong> |

*This class extends \CCL\Content\Element\Basic\Container*

<hr />

### Class: \CCL\Content\Element\Basic\Heading

> Represents a heading element.

###### Example
```
// The following code snippet creates a heading with the size 3.
$h = new Heading('myheading', 3);
```

| Visibility | Function |
|:-----------|:---------|
| public | Parameters: <ul><li>mixed <strong>$id</strong> <em></em></li><li>mixed <strong>$size</strong> <em></em></li><li>array <strong>$classes</strong> <em></em></li><li>array <strong>$attributes</strong> <em></em></li></ul>Returns:<br><em>void</em><br><br>Call:<br><strong>__construct(</strong><em>mixed</em> <strong>$id</strong>, <em>mixed</em> <strong>$size</strong>, <em>array</em> <strong>$classes = array()</strong>, <em>array</em> <strong>$attributes = array()</strong>)</strong> |
| public | <em>The size of the heading, must be between 1 and 6.</em><br><br>Returns:<br><em>number</em><br><br>Call:<br><strong>getSize()</strong> |

*This class extends \CCL\Content\Element\Basic\Container*

<hr />

### Class: \CCL\Content\Element\Basic\Image

> Represents an image element.

###### Example
```
// The following code snippet creates an image with an alternative text.
$i = new Image('myimage', 'url/to/image.jpg', 'Alte text');
```

| Visibility | Function |
|:-----------|:---------|
| public | <em>Constructor which sets the classes and attributes of the element. The src attribute can be a url which represents this image.</em><br><br>Parameters: <ul><li>string <strong>$id</strong> <em>The id of the element, must be not empty</em></li><li>string <strong>$src</strong> <em>The src url of the image</em></li><li>string <strong>$alt</strong> <em>The alternative text of the image</em></li><li>array <strong>$classes</strong> <em>The classes of the element</em></li><li>array <strong>$attributes</strong> <em>Additional attributes for the element</em></li></ul>Returns:<br><em>void</em><br><br>Call:<br><strong>__construct(</strong><em>string</em> <strong>$id</strong>, <em>string</em> <strong>$src</strong>, <em>string</em> <strong>$alt = `''`</strong>, <em>array</em> <strong>$classes = array()</strong>, <em>array</em> <strong>$attributes = array()</strong>)</strong> |

*This class extends \CCL\Content\Element\Basic\Element*

<hr />

### Class: \CCL\Content\Element\Basic\Link

> Represents a link element.

###### Example
```
// The following code snippet creates a link which should open in a new window.
$l = new Link('mylink', 'http://www.example.com', '_blank');
```

| Visibility | Function |
|:-----------|:---------|
| public | <em>Constructor which sets the classes and attributes of the element. The link attribute can be a url where the link points to. The target attribute defines where the link should be opened.</em><br><br>Parameters: <ul><li>string <strong>$id</strong> <em>The id of the element, must be not empty</em></li><li>string <strong>$link</strong> <em>The link of the element</em></li><li>string <strong>$target</strong> <em>The target of the element</em></li><li>array <strong>$classes</strong> <em>The classes of the element</em></li><li>array <strong>$attributes</strong> <em>Additional attributes for the element</em></li></ul>Returns:<br><em>void</em><br><br>Call:<br><strong>__construct(</strong><em>string</em> <strong>$id</strong>, <em>string</em> <strong>$link</strong>, <em>string</em> <strong>$target = null</strong>, <em>array</em> <strong>$classes = array()</strong>, <em>array</em> <strong>$attributes = array()</strong>)</strong> |

*This class extends \CCL\Content\Element\Basic\Container*

<hr />

### Class: \CCL\Content\Element\Basic\ListContainer

> Represents a list element.

###### Example
```
// The following code snippet creates an unordered list with one item.
$l = new ListContainer('mylist', ListContainer::UNORDERED);
$l->addListItem(new ListItem('myitem'));
```

| Visibility | Function |
|:-----------|:---------|
| public | <em>Constructor which sets the classes and attributes of the element. The type defines if the list is ordered or not.</em><br><br>Parameters: <ul><li>string <strong>$id</strong> <em>The id of the element, must be not empty</em></li><li>string <strong>$type</strong> <em>The type of the list</em></li><li>array <strong>$classes</strong> <em>The classes of the element</em></li><li>array <strong>$attributes</strong> <em>Additional attributes for the element</em></li></ul>Returns:<br><em>void</em><br><br>Call:<br><strong>__construct(</strong><em>string</em> <strong>$id</strong>, <em>string</em> <strong>$type</strong>, <em>array</em> <strong>$classes = array()</strong>, <em>array</em> <strong>$attributes = array()</strong>)</strong> |
| public | <em>Adds the given list item to the children and returns it for chaining.</em><br><br>Parameters: <ul><li>\CCL\Content\Element\Basic\ListItem <strong>$listItem</strong> <em></em></li></ul>Returns:<br><em>[\CCL\Content\Element\Basic\ListItem](#class-cclcontentelementbasiclistitem)</em><br><br>Call:<br><strong>addListItem(</strong><em>[\CCL\Content\Element\Basic\ListItem](#class-cclcontentelementbasiclistitem)</em> <strong>$listItem</strong>)</strong> |
| public | <em>Returns the type of the list.</em><br><br>Returns:<br><em>string</em><br><br>Call:<br><strong>getType()</strong> |

*This class extends \CCL\Content\Element\Basic\Container*

<hr />

### Class: \CCL\Content\Element\Basic\ListItem

> Represents a list item element.

###### Example
```
// The following code snippet creates a list item.
$i = new ListItem('myitem');
```

| Visibility | Function |
|:-----------|:---------|
| public | <em>Constructor which sets the classes and attributes of the element. The id parameter must be set, otherwise an InvalidArgumentException is thrown.</em><br><br>Parameters: <ul><li>string <strong>$id</strong> <em>The id of the element, must be not empty</em></li><li>array <strong>$classes</strong> <em>The classes of the element</em></li><li>array <strong>$attributes</strong> <em>Additional attributes for the element</em></li></ul>Returns:<br><em>void</em><br><br>Call:<br><strong>__construct(</strong><em>string</em> <strong>$id</strong>, <em>array</em> <strong>$classes = array()</strong>, <em>array</em> <strong>$attributes = array()</strong>)</strong> |

*This class extends \CCL\Content\Element\Basic\Container*

<hr />

### Class: \CCL\Content\Element\Basic\Meta

> Represents a meta element.

###### Example
```
// The following code snippet creates a meta item with the url property.
$m = new Meta('mymeta', 'url', 'http://www.example.com/item/74);
```

| Visibility | Function |
|:-----------|:---------|
| public | <em>Constructor which sets the classes and attributes of the element.</em><br><br>Parameters: <ul><li>string <strong>$id</strong> <em>The id of the element, must be not empty</em></li><li>string <strong>$property</strong> <em>The property name</em></li><li>string <strong>$content</strong> <em>The content of the element</em></li><li>array <strong>$classes</strong> <em>The classes of the element</em></li><li>array <strong>$attributes</strong> <em>Additional attributes for the element</em></li></ul>Returns:<br><em>void</em><br><br>Call:<br><strong>__construct(</strong><em>string</em> <strong>$id</strong>, <em>string</em> <strong>$property</strong>, <em>string</em> <strong>$content</strong>, <em>array</em> <strong>$classes = array()</strong>, <em>array</em> <strong>$attributes = array()</strong>)</strong> |

*This class extends \CCL\Content\Element\Basic\Element*

<hr />

### Class: \CCL\Content\Element\Basic\Paragraph

> Represents a paragraph element.

###### Example
```
// The following code snippet creates a Paragraph.
$p = new Paragraph('myp');
```

| Visibility | Function |
|:-----------|:---------|
| public | <em>Constructor which sets the classes and attributes of the element. The id parameter must be set, otherwise an InvalidArgumentException is thrown.</em><br><br>Parameters: <ul><li>string <strong>$id</strong> <em>The id of the element, must be not empty</em></li><li>array <strong>$classes</strong> <em>The classes of the element</em></li><li>array <strong>$attributes</strong> <em>Additional attributes for the element</em></li></ul>Returns:<br><em>void</em><br><br>Call:<br><strong>__construct(</strong><em>string</em> <strong>$id</strong>, <em>array</em> <strong>$classes = array()</strong>, <em>array</em> <strong>$attributes = array()</strong>)</strong> |

*This class extends \CCL\Content\Element\Basic\Container*

<hr />

### Class: \CCL\Content\Element\Basic\Table

> Represents a table.

###### Example
```
// The following code snippet creates a table and a row with a cell.
$t = new Table('mytable', ['Col A', 'Col B']);
$r = $t->addRow(new Table\Row('myrow'));
$c = $r->addCell(new Table\Cell('mycell'));
$c->setContent('The content of the cell in the table');
```

| Visibility | Function |
|:-----------|:---------|
| public | <em>Constructor which sets the classes and attributes of the element. The columns is an array of strings which do represent the columns of the table.</em><br><br>Parameters: <ul><li>string <strong>$id</strong> <em>The id of the element, must be not empty</em></li><li>string[] <strong>$columns</strong> <em>The columns</em></li><li>array <strong>$classes</strong> <em>The classes of the element</em></li><li>array <strong>$attributes</strong> <em>Additional attributes for the element</em></li></ul>Returns:<br><em>void</em><br><br>Call:<br><strong>__construct(</strong><em>string</em> <strong>$id</strong>, <em>string[]</em> <strong>$columns</strong>, <em>array</em> <strong>$classes = array()</strong>, <em>array</em> <strong>$attributes = array()</strong>)</strong> |
| public | <em>Adds the given row to the internal footer elements children and returns it for chaining.</em><br><br>Parameters: <ul><li>\CCL\Content\Element\Basic\Table\Row <strong>$row</strong> <em></em></li></ul>Returns:<br><em>[\CCL\Content\Element\Basic\Table\Row](#class-cclcontentelementbasictablerow)</em><br><br>Call:<br><strong>addFooterRow(</strong><em>[\CCL\Content\Element\Basic\Table\Row](#class-cclcontentelementbasictablerow)</em> <strong>$row</strong>)</strong> |
| public | <em>Adds the given row to the internal body elements children and returns it for chaining.</em><br><br>Parameters: <ul><li>\CCL\Content\Element\Basic\Table\Row <strong>$row</strong> <em></em></li></ul>Returns:<br><em>[\CCL\Content\Element\Basic\Table\Row](#class-cclcontentelementbasictablerow)</em><br><br>Call:<br><strong>addRow(</strong><em>[\CCL\Content\Element\Basic\Table\Row](#class-cclcontentelementbasictablerow)</em> <strong>$row</strong>)</strong> |

*This class extends \CCL\Content\Element\Basic\Container*

<hr />

### Class: \CCL\Content\Element\Basic\TextBlock

> Represents a text block element.

###### Example
```
// The following code snippet creates a text block.
$t = new TextBlock('mytextblock');
```

| Visibility | Function |
|:-----------|:---------|
| public | <em>Constructor which sets the classes and attributes of the element. The id parameter must be set, otherwise an InvalidArgumentException is thrown.</em><br><br>Parameters: <ul><li>string <strong>$id</strong> <em>The id of the element, must be not empty</em></li><li>array <strong>$classes</strong> <em>The classes of the element</em></li><li>array <strong>$attributes</strong> <em>Additional attributes for the element</em></li></ul>Returns:<br><em>void</em><br><br>Call:<br><strong>__construct(</strong><em>string</em> <strong>$id</strong>, <em>array</em> <strong>$classes = array()</strong>, <em>array</em> <strong>$attributes = array()</strong>)</strong> |

*This class extends \CCL\Content\Element\Basic\Container*

<hr />

### Class: \CCL\Content\Element\Basic\Description\Description

> Represents a description which can be used in a description list.

###### Example
```
// The following code snippet creates a description.
$d = new Description('mydesc');
```

| Visibility | Function |
|:-----------|:---------|
| public | <em>Constructor which sets the classes and attributes of the element. The id parameter must be set, otherwise an InvalidArgumentException is thrown.</em><br><br>Parameters: <ul><li>string <strong>$id</strong> <em>The id of the element, must be not empty</em></li><li>array <strong>$classes</strong> <em>The classes of the element</em></li><li>array <strong>$attributes</strong> <em>Additional attributes for the element</em></li></ul>Returns:<br><em>void</em><br><br>Call:<br><strong>__construct(</strong><em>string</em> <strong>$id</strong>, <em>array</em> <strong>$classes = array()</strong>, <em>array</em> <strong>$attributes = array()</strong>)</strong> |

*This class extends \CCL\Content\Element\Basic\Container*

<hr />

### Class: \CCL\Content\Element\Basic\Description\Term

> Represents a term which can be used in a description list.

###### Example
```
// The following code snippet creates a term.
$t = new Term('myterm');
```

| Visibility | Function |
|:-----------|:---------|
| public | <em>Constructor which sets the classes and attributes of the element. The id parameter must be set, otherwise an InvalidArgumentException is thrown.</em><br><br>Parameters: <ul><li>string <strong>$id</strong> <em>The id of the element, must be not empty</em></li><li>array <strong>$classes</strong> <em>The classes of the element</em></li><li>array <strong>$attributes</strong> <em>Additional attributes for the element</em></li></ul>Returns:<br><em>void</em><br><br>Call:<br><strong>__construct(</strong><em>string</em> <strong>$id</strong>, <em>array</em> <strong>$classes = array()</strong>, <em>array</em> <strong>$attributes = array()</strong>)</strong> |

*This class extends \CCL\Content\Element\Basic\Container*

<hr />

### Class: \CCL\Content\Element\Basic\Form\Input

> Represents a input element.

###### Example
```
// The following code snippet creates a text area input.
$i = new Input('myinput', 'textarea', 'nameofinput', 'Default Text');
```

| Visibility | Function |
|:-----------|:---------|
| public | <em>Constructor which sets the classes and attributes of the element. The type defines what this input is and the name must be unique in the form. The value defines what this input contains for data.</em><br><br>Parameters: <ul><li>string <strong>$id</strong> <em>The id of the element, must be not empty</em></li><li>string <strong>$type</strong> <em>The type of the input</em></li><li>string <strong>$name</strong> <em>The name of the input</em></li><li>string <strong>$value</strong> <em>The value of the input</em></li><li>array <strong>$classes</strong> <em>The classes of the element</em></li><li>array <strong>$attributes</strong> <em>Additional attributes for the element</em></li></ul>Returns:<br><em>void</em><br><br>Call:<br><strong>__construct(</strong><em>string</em> <strong>$id</strong>, <em>string</em> <strong>$type</strong>, <em>string</em> <strong>$name</strong>, <em>string</em> <strong>$value = `''`</strong>, <em>array</em> <strong>$classes = array()</strong>, <em>array</em> <strong>$attributes = array()</strong>)</strong> |

*This class extends \CCL\Content\Element\Basic\Element*

<hr />

### Class: \CCL\Content\Element\Basic\Form\Label

> Represents a label element.

###### Example
```
// The following code snippet creates a text area input.
$i = new Label('myinput', 'idofinput');
```

| Visibility | Function |
|:-----------|:---------|
| public | <em>Constructor which sets the classes and attributes of the element.</em><br><br>Parameters: <ul><li>string <strong>$id</strong> <em>The id of the element, must be not empty</em></li><li>string <strong>$forId</strong> <em>The id the label belongs to</em></li><li>array <strong>$classes</strong> <em>The classes of the element</em></li><li>array <strong>$attributes</strong> <em>Additional attributes for the element</em></li></ul>Returns:<br><em>void</em><br><br>Call:<br><strong>__construct(</strong><em>string</em> <strong>$id</strong>, <em>string</em> <strong>$forId</strong>, <em>array</em> <strong>$classes = array()</strong>, <em>array</em> <strong>$attributes = array()</strong>)</strong> |

*This class extends \CCL\Content\Element\Basic\Container*

<hr />

### Class: \CCL\Content\Element\Basic\Form\Option

> Represents a select option element.

###### Example
```
// The following code snippet creates a select option element with a value.
$o = new Option('myselect', 'myvalue');
```

| Visibility | Function |
|:-----------|:---------|
| public | <em>Constructor which sets the classes and attributes of the element.</em><br><br>Parameters: <ul><li>string <strong>$id</strong> <em>The id of the element, must be not empty</em></li><li>string <strong>$value</strong> <em>The value of the option</em></li><li>array <strong>$classes</strong> <em>The classes of the element</em></li><li>array <strong>$attributes</strong> <em>Additional attributes for the element</em></li></ul>Returns:<br><em>void</em><br><br>Call:<br><strong>__construct(</strong><em>string</em> <strong>$id</strong>, <em>string</em> <strong>$value</strong>, <em>array</em> <strong>$classes = array()</strong>, <em>array</em> <strong>$attributes = array()</strong>)</strong> |

*This class extends \CCL\Content\Element\Basic\Element*

<hr />

### Class: \CCL\Content\Element\Basic\Form\Select

> Represents a select element.

###### Example
```
// The following code snippet creates a select element which allows to select multiple options.
  // The option 2 is pre selected.
$s = new Select('myselect', 'myname', true);
s->addOption(1, 'Option 1', false);
s->addOption(2, 'Option 2', true);
```

| Visibility | Function |
|:-----------|:---------|
| public | <em>Constructor which sets the classes and attributes of the element.</em><br><br>Parameters: <ul><li>string <strong>$id</strong> <em>The id of the element, must be not empty</em></li><li>string <strong>$name</strong> <em>The name of the select</em></li><li>bool/boolean <strong>$multiple</strong> <em>If it is allowed to select multiple elements</em></li><li>array <strong>$classes</strong> <em>The classes of the element</em></li><li>array <strong>$attributes</strong> <em>Additional attributes for the element</em></li></ul>Returns:<br><em>void</em><br><br>Call:<br><strong>__construct(</strong><em>string</em> <strong>$id</strong>, <em>string</em> <strong>$name</strong>, <em>bool/boolean</em> <strong>$multiple = false</strong>, <em>array</em> <strong>$classes = array()</strong>, <em>array</em> <strong>$attributes = array()</strong>)</strong> |
| public | <em>Adds an option with the text and value, if selected is true, it gets the selected property.</em><br><br>Parameters: <ul><li>string <strong>$text</strong> <em></em></li><li>string <strong>$value</strong> <em></em></li><li>bool/boolean <strong>$selected</strong> <em></em></li></ul>Returns:<br><em>\CCL\Content\Element\Basic\Element</em><br><br>Call:<br><strong>addOption(</strong><em>string</em> <strong>$text</strong>, <em>string</em> <strong>$value</strong>, <em>bool/boolean</em> <strong>$selected = false</strong>)</strong> |

*This class extends \CCL\Content\Element\Basic\Container*

<hr />

### Class: \CCL\Content\Element\Basic\Table\Body

> Represents a table body element.

###### Example
```
// The following code snippet creates a table body element.
$b = new Body('mybody');
```

| Visibility | Function |
|:-----------|:---------|
| public | <em>Constructor which sets the classes and attributes of the element. The id parameter must be set, otherwise an InvalidArgumentException is thrown.</em><br><br>Parameters: <ul><li>string <strong>$id</strong> <em>The id of the element, must be not empty</em></li><li>array <strong>$classes</strong> <em>The classes of the element</em></li><li>array <strong>$attributes</strong> <em>Additional attributes for the element</em></li></ul>Returns:<br><em>void</em><br><br>Call:<br><strong>__construct(</strong><em>string</em> <strong>$id</strong>, <em>array</em> <strong>$classes = array()</strong>, <em>array</em> <strong>$attributes = array()</strong>)</strong> |

*This class extends \CCL\Content\Element\Basic\Container*

<hr />

### Class: \CCL\Content\Element\Basic\Table\Cell

> Represents a table cell element.

###### Example
```
// The following code snippet creates a table cell element.
$c = new Cell('mycell');
```

| Visibility | Function |
|:-----------|:---------|
| public | <em>Constructor which sets the classes and attributes of the element. The id parameter must be set, otherwise an InvalidArgumentException is thrown.</em><br><br>Parameters: <ul><li>string <strong>$id</strong> <em>The id of the element, must be not empty</em></li><li>array <strong>$classes</strong> <em>The classes of the element</em></li><li>array <strong>$attributes</strong> <em>Additional attributes for the element</em></li></ul>Returns:<br><em>void</em><br><br>Call:<br><strong>__construct(</strong><em>string</em> <strong>$id</strong>, <em>array</em> <strong>$classes = array()</strong>, <em>array</em> <strong>$attributes = array()</strong>)</strong> |

*This class extends \CCL\Content\Element\Basic\Container*

<hr />

### Class: \CCL\Content\Element\Basic\Table\Footer

> Represents a table footer element.

###### Example
```
// The following code snippet creates a table footer element.
$f = new Footer('myfooter');
```

| Visibility | Function |
|:-----------|:---------|
| public | <em>Constructor which sets the classes and attributes of the element. The id parameter must be set, otherwise an InvalidArgumentException is thrown.</em><br><br>Parameters: <ul><li>string <strong>$id</strong> <em>The id of the element, must be not empty</em></li><li>array <strong>$classes</strong> <em>The classes of the element</em></li><li>array <strong>$attributes</strong> <em>Additional attributes for the element</em></li></ul>Returns:<br><em>void</em><br><br>Call:<br><strong>__construct(</strong><em>string</em> <strong>$id</strong>, <em>array</em> <strong>$classes = array()</strong>, <em>array</em> <strong>$attributes = array()</strong>)</strong> |

*This class extends \CCL\Content\Element\Basic\Container*

<hr />

### Class: \CCL\Content\Element\Basic\Table\Head

> Represents a table head element.

###### Example
```
// The following code snippet creates a table head element.
$h = new Head('myhead');
```

| Visibility | Function |
|:-----------|:---------|
| public | <em>Constructor which sets the classes and attributes of the element. The id parameter must be set, otherwise an InvalidArgumentException is thrown.</em><br><br>Parameters: <ul><li>string <strong>$id</strong> <em>The id of the element, must be not empty</em></li><li>array <strong>$classes</strong> <em>The classes of the element</em></li><li>array <strong>$attributes</strong> <em>Additional attributes for the element</em></li></ul>Returns:<br><em>void</em><br><br>Call:<br><strong>__construct(</strong><em>string</em> <strong>$id</strong>, <em>array</em> <strong>$classes = array()</strong>, <em>array</em> <strong>$attributes = array()</strong>)</strong> |

*This class extends \CCL\Content\Element\Basic\Container*

<hr />

### Class: \CCL\Content\Element\Basic\Table\HeadCell

> Represents a table head cell element.

###### Example
```
// The following code snippet creates a table head cell element.
$h = new HeadCell('myheadcell');
```

| Visibility | Function |
|:-----------|:---------|
| public | <em>Constructor which sets the classes and attributes of the element. The id parameter must be set, otherwise an InvalidArgumentException is thrown.</em><br><br>Parameters: <ul><li>string <strong>$id</strong> <em>The id of the element, must be not empty</em></li><li>array <strong>$classes</strong> <em>The classes of the element</em></li><li>array <strong>$attributes</strong> <em>Additional attributes for the element</em></li></ul>Returns:<br><em>void</em><br><br>Call:<br><strong>__construct(</strong><em>string</em> <strong>$id</strong>, <em>array</em> <strong>$classes = array()</strong>, <em>array</em> <strong>$attributes = array()</strong>)</strong> |

*This class extends \CCL\Content\Element\Basic\Container*

<hr />

### Class: \CCL\Content\Element\Basic\Table\Row

> Represents a table head row element.

###### Example
```
// The following code snippet creates a table head row element.
$r = new Row('myheadrow');
```

| Visibility | Function |
|:-----------|:---------|
| public | <em>Constructor which sets the classes and attributes of the element. The id parameter must be set, otherwise an InvalidArgumentException is thrown.</em><br><br>Parameters: <ul><li>string <strong>$id</strong> <em>The id of the element, must be not empty</em></li><li>array <strong>$classes</strong> <em>The classes of the element</em></li><li>array <strong>$attributes</strong> <em>Additional attributes for the element</em></li></ul>Returns:<br><em>void</em><br><br>Call:<br><strong>__construct(</strong><em>string</em> <strong>$id</strong>, <em>array</em> <strong>$classes = array()</strong>, <em>array</em> <strong>$attributes = array()</strong>)</strong> |
| public | <em>Adds the given cell to the internal child collection.</em><br><br>Parameters: <ul><li>\CCL\Content\Element\Basic\Table\Cell <strong>$cell</strong> <em></em></li></ul>Returns:<br><em>[\CCL\Content\Element\Basic\Table\Cell](#class-cclcontentelementbasictablecell)</em><br><br>Call:<br><strong>addCell(</strong><em>[\CCL\Content\Element\Basic\Table\Cell](#class-cclcontentelementbasictablecell)</em> <strong>$cell</strong>)</strong> |

*This class extends \CCL\Content\Element\Basic\Container*

