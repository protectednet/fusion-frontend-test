# Brief


## A little background information

Protected Net provides a range of security software to customers. In order to achieve this we have multiple brands for each project (eg: 3 brands for our AV project and another 3 brands for our VPN project). In order to optimise our workflow we try to share as much between all our brands as possible, we have created a framework that allows us to share components across the brands but still apply different styling and have different content depending on the brand.

We have a hierarchy of repositories that work together, getting more specific at each layer:

-   **global-components**: holds the most general components that are shared across sites, brands and subdomains.
-   **branding**: this is where any components from global-components get any branding applied to them. This is also where component can be created that are shared across a specific brand only.
-   **site-domain**: This refers to a repo that holds all the markup for that particular domain. Domain specific components can also be created here.

## For your test

For your test we've created a lightweight version of our PHP framework where you can show us your ability to work with components in PHP, without having to worry about any component hierarchy discussed earlier.

The framework created uses a mixture of Layouts, Components, Partials & Pages which can be used to create the design (Lander-Design.jpg) found in this folder.

-   **Layout**: this is used to organise the main structure of the page. They tend to include any partials or components that need to exist across multiple pages.
-   **Page**: Where partials and components are implemented as well as any markup required glue it all together.
-   **Component**: a component is bundle of logic, markup & styling that's designed to reusable. There shouldn't be anything too design specific in a component. A button component would be a good example. You want to be able to render each button style when needed but don't want it to have any hardcoded text on it. 
-   **Partial**: Similar to a component, except can be specific and can have hardcoded content.

We're interested in seeing how you break the design into its relevant parts, whether the components are reusable. We've also given you some premade components, partials and pages to get you started. These aren't finished so will require extra work to get them production ready. I'd like to see some subtle animation where necessary along with responsive design ie: needs to look good on tablet and mobile, not just desktop. The design doesn't offer an example of the first and last page of the slider in the hero banner please use your best judgement here.

Overall please remember that you're applying for a frontend position so it's important that the lander looks good and there's clear attention to detail throughout. If your running out of time feel free to leave out the last section as we'd rather have something of high quality than all sections completed but to a lower standard.

### Brief Update

I've also added a place to store traits, traits are useful for handling things that may be needed across multiple components like sizing and ordering and alignment. You can find these traits in the (src/Traits) folder.

The SizedComponentTrait.php adds sizing methods to components it's implemented on, from the smallest `sizeX1()`  to the largest `sizeX10()`.

I've added a place to hold Enums (src/Enum/) like Breakpoints.php, which is used to specify available breakpoints. Enum's are handy as method parameters can be cast to only accept specific enums which prevents random strings from being passed round (which have the possibility of containing typoes or simply being incorrect).

I've pre-styled a few components like **Button.php**, **FeatureCard.php** and **IconWrapper.php** and implemented them on the homepage to give you an example of what we're looking for. These components and their styling aren't necessarily finished and may need more work to get them to look closer to the design, but they will give you a good head start and provide examples of how to set up and style other components you may need.

## Useful Framework Methods and Properties

There are a good few helper methods available for you to use, we'll discuss a few here.

### General HTML Helpers

Each time you create a Page, Partial or Component the outermost element is rendered from PHP this allows for further editing and manipulation of the markup in PHP. An example of this would be the following methods:

|

`$this->addClass('className');`

 |

This will add a class to the outermost element of the Component, Partial or Page.

 |
|

`$this->setAttribute('attribute', 'value');`

`$this->setAttributes(['attribute' => 'value']);`

 |

Similar to the class method except these methods manage attributes.

 |
|

`protected $_tag = "html-tag-here";`

 |

By default Components and Partials are wrapped in a **"div"** whereas Pages are wrapped in **"main"** tags. To override this at anypoint use the following property:

 |

### BEM Helpers

There are also some BEM helper methods available for use in the viewModal and the view.

|

`$this->_addModifier('modifier');`

`$this->_removeModifier('modifier');`

 |

These two methods are used for adding or removing modifiers respectively. There is no need to get these in the view as they will automatically added to the outermost element using the addClass() method.

 |
|

`$this->getModifier('modifier');`

`$this->getModifier('modifier', 'element');`

 |

If you want to manually add a modifier from the view you can use one of these methods.

The first method will create a modifier directly off the base class, whereas by adding the second parameter the modifier will be scoped to an element.

 |
|

`$this->getElementName(element');`

 |

This method is used for manually setting an element, because it's variadic you can pass any number of element names in and they'll be chained together.

 |

## External Libraries

Zurb Foundation should be used as your CSS framework to handle the 12 column grid and any utility classes. All external libraries should be pulled in using a package manager like npm or bower (where possible).

We've already included and setup Foundation 6 and enabled the XY grid.

### Images

All images can be found in the 'resources/images' folder and have been organised according to the section of the page they are used in. To use an image place them into the following directory ("_resources/img/") relative to the Component, Partial or Page. Then from the view use the `$this->getImg('img-name.png');` to echo out the path.

### Fonts

There should already be a gulp task to automatically move over any required font files. The fonts used are Raleway and Lato. These can be pulled in from Google fonts:

<https://fonts.google.com/specimen/Raleway>

<https://fonts.google.com/specimen/Lato>

## Gulp

We've provided a ready to use gulp file for this project, which has all of the tasks you'll need to compile everything in a way that will work with the PHP component structure.

The main commands you'll need are:

-   **gulp**
-   **gulp cubex-watch**
-   **gulp cubex-reload**

Questions

If you have any questions please feel free to contact me via **ashley.ktorou@protected.net**
