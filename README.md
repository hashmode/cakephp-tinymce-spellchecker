Tinymce 4.x spellcheker component for Cakephp 2.x
============================


## Requrements
1. Cakephp 2.x (tested only with version 2.6, but should work fine with others)
2. Tinymce 4.x (tested with 4.1.7)
3. Php enchant lib - for Debian run `apt-get install php5-enchant`


## Installation
Be sure to include component in your controller, and copy the tm_spellchecker folder into `app/Vendor` directory.

For tinymce init use instructions from here for
http://www.tinymce.com/wiki.php/Plugin:spellchecker

`spellchecker_rpc_url` should lead to some contoller's some action., inside which just use `$this->TinyMceSpellChecker->check();`, or post/ajax request can be checked e.g.

```
if ($this->request->is(array('post', 'put')) && $this->request->is(array('ajax'))) {
	$this->TinyMceSpellChecker->check();
} else {
	echo json_encode(array('error' => 'Invalid Request'));
}
```
the post request(`$this->request->data`) contains `method`, `text` and `lang` as array indices, as described in here 
http://www.tinymce.com/wiki.php/Configuration:spellchecker_rpc_url, so maybe it can be useful to add some text length restrictions or some other validations based on specific case, before calling the spellchecker.

## Dictionaries
As an example a US English dictionary files are included. It should be 2 files for each language: with `.dic` amd `.aff` extensions. To install specific dictionaries, the way described in this article can be used
http://www.epinova.no/blog/arild-henrichsen/dates/2014/8/adding-dictionaries-to-the-tinymce-spellchecker-add-on-in-episerver-7/

specifically

1. download the necessary language from mozilla https://addons.mozilla.org/en-US/firefox/language-tools/
2. change the file's extension from `.xpi` to `.zip` and extract it
3. Copy the necessary `.dic` and `.aff` files into `app/Vendoer/tm_spellchecker/dicts` directory and rename if necessary.

## License
Component by itself is completely free for any kind of use, including any kind of modification, distribution etc.(you can consider GPL, MIT or any open source license, my favorite would be WTFPL, http://en.wikipedia.org/wiki/WTFPL)

Please refer to tinymce's website for tinymce's as well as spelchecker's licenses.









