# Tinymce 4.x spellcheker for Cakephp 2.x

Use instructions from here
http://www.tinymce.com/wiki.php/Plugin:spellchecker

`spellchecker_rpc_url` should lead to some contollers some action., inside which just use `$this->TinyMceSpellChecker->check();`, or post/ajax request can be checked e.g.

```
if ($this->request->is(array('post', 'put')) && $this->request->is(array('ajax'))) {
	$this->TinyMceSpellChecker->check();
} else {
	echo json_encode(array('error' => 'Invalid Request'));
}
```
