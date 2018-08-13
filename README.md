# Examples of code by Ivan Boothe

## Frontend

* [Gulpfile example](project_a/gulpfile.js): I've been working on this set of gulp-based tasks for awhile, through multiple projects. I think this is a good example of what I've ended up with, which sets up watch tasks (using BrowserSync) for compiling, compressing and linting Sass, JavaScript, images and fonts. In this case, it also integrates a separately-created and -compiled instance of PatternLab elsewhere in the repo. It also includes a helper function for grabbing Drupal Twig templates and copying them into the custom theme, so that they can be pointed to Pattern Lab Twig templates. (Also see documentation on this, below.)