# Composer CKEditor Plugin Installer

Install CKEditor plugins when CKEditor itself is installed with Composer

## Installation

* Register as a repository

```
"repositories": [
{
	"type": "git",
	"url": "https://bitbucket.org/floappsltd/composer-ckeditor-plugin-installer.git"
}
```

* Require this plugin

```
{
	"require": {
		"floapps/ckeditor-installer-plugin": "@dev"
	}
}
```

## Usage

* Register CKEditor plugins as repositories
  * `"type": "package"` in repository root is mandatory
  * `"name"` must start with `floapps/ckeditor-`, rest of the name is used as the directory name when installing (see plugin documentation for reference)
  * `"type": "ckeditor-plugin"` is mandatory

```
"repositories": [
{
	"type": "package",
	"package": {
		"name": "floapps/ckeditor-uploadcare",
		"version": "2.1.1",
		"type": "ckeditor-plugin",
		"source": {
			"url": "https://github.com/uploadcare/uploadcare-ckeditor.git",
			"type": "git",
			"reference": "master"
		}
	}
},
{
	"type": "package",
	"package": {
		"name": "floapps/ckeditor-base64image",
		"version": "1.3",
		"type": "ckeditor-plugin",
		"dist": {
			"url": "https://download.ckeditor.com/base64image/releases/base64image_1.3.zip",
			"type": "zip"
		}
	}
}
```

* Require the CKEditor plugins

```
"require": {
	"floapps/ckeditor-uploadcare": "^2.1.1",
	"floapps/ckeditor-base64image": "^1.3"
}
```

* Run `composer update`
* If all goes well, your plugin(s) should now be installed beneath `vendor/ckeditor/ckeditor/plugins/`