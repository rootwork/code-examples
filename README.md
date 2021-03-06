# Examples of code by Ivan Boothe

_Note: Some images and other assets have been removed due to copyright and non-disclosure agreements._

## Frontend

* [Drupal gulp example](project_a/gulpfile.js): I've been working on this set of gulp-based tasks for awhile, through multiple projects. I think this is a good example of what I've ended up with, which sets up watch tasks (using BrowserSync) for compiling, compressing and linting Sass, JavaScript, images and fonts within a Drupal theme. In this case, it integrates a separately-created and -compiled instance of PatternLab elsewhere in the original repo by compiling it and moving it into the theme directory. It also includes a helper function for grabbing Drupal Twig templates and copying them into the custom theme, so that they can be pointed to Pattern Lab Twig templates. (Mentioned in the documentation item, below.)

* [Pattern Lab/Drupal 8 integration example](project_a/web/themes/custom/project_a_v2): This project involved a separate design agency delivering a Pattern Lab styleguide, which I then integrated into Drupal. Consequently, there's not a lot of Sass or JS here. What I did build was a component mapping (see [project_a_v2.info.yml](project_a/web/themes/custom/project_a_v2/project_a_v2.info.yml), lines 62-73) allowing us to directly reference Pattern Lab templates using the `@pl` prefix, put to use extensively in the [templates](project_a/web/themes/custom/project_a_v2/templates).

* [Drupal 8 custom theme example](project_s): This custom theme was originally derived from Zen theme's 8.x development version, but diverged quite a bit as that original theme stalled and the client's theme evolved. Includes a fully componentized atomic design (see [project_s.libraries.yml](project_s/project_s.libraries.yml) and the [components directory](project_s/components/)) with a [generated KSS styleguide](project_s/styleguide/) (see rendered [Section A](https://rootwork.github.io/code-examples/project_s/styleguide/section-scorecards.html) and [Section B](https://rootwork.github.io/code-examples/project_s/styleguide/section-slm.html) for examples).

* [Drupal 7 custom base theme example](project_c/project_c_base_responsive): This custom base theme was built for a university multisite installation profile. You can see examples of template preprocessing ([template.php](project_c/project_c_base_responsive/template.php)) and atomic-style Sass organization ([sass directory](project_c/project_c_base_responsive/sass) and [sass/modules directory](project_c/project_c_base_responsive/sass/modules)). Note for example the [event component](project_c/project_c_base_responsive/sass/modules/event), which includes the Sass, Twig template files and Pattern Lab dummy data all in a single directory.

* [Drupal 7 custom child theme example](project_c/project_c_dept3_responsive): This child theme of the previous example inherited all of the atomic design, and compiled it along with the child theme's additions into a [KSS styleguide](project_c/project_c_dept3_responsive/documentation/styleguide/) 
([view rendered Sass module guide](https://rootwork.github.io/code-examples/project_c/project_c_dept3_responsive/documentation/styleguide/section-modules.html)) and a [SassDoc listing](project_c/project_c_dept3_responsive/documentation/sassdoc/) ([view rendered SassDoc](https://rootwork.github.io/code-examples/project_c/project_c_dept3_responsive/documentation/sassdoc/)).

## Site building

* [Drupal 8 custom module example](project_a/web/modules/custom/micro): This simple Drupal 8 custom entity module created a new entity that was used in BEAN-like form across pages and features, as opposed to having the client create and manage many custom blocks. While this isn't a complicated custom module, I think it demonstrates my understandings of how to work with custom entities. Includes menu routing, permissions, an administration view, and overridable Twig templates.

## Documentation

* For the first project above (Project A), I was working with several junior developers, both on our team and on the client's team. As a result, I spent a lot of time developing tools and documentation to aid in their work. Two good examples of this are my writeups of [general development documentation](project_a/docs/development.md) and [frontend documentation](project_a/docs/frontend.md), which mentions specific gulp- and node-based tools that I created to ease their workflow.