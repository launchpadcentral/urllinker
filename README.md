* urllinker Notes

- the source package is a bitbucket mercurial repository
- this package adds a composer.json file and a static class function (I don't remember why that's
  preferable to using the original class
- there was a change to the original `UrlLinker.php` as I encountered some php version issue regarding
  use of global variables
- hypothetically one can get changes from the original package via
 - `cd lib/urllinker`
 - `hg pull`

