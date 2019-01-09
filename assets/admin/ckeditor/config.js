/**



 * @license Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.



 * For licensing, see LICENSE.html or http://ckeditor.com/license



 */







CKEDITOR.editorConfig = function( config ) {

	// alert('test');

	

	// Define changes to default configuration here.



	// For the complete reference:



	// http://docs.ckeditor.com/#!/api/CKEDITOR.config







	// The toolbar groups arrangement, optimized for two toolbar rows.



	config.toolbarGroups = [



		{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },



		{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },



		{ name: 'links' },



		{ name: 'insert' },



		{ name: 'forms' },



		{ name: 'tools' },



		{ name: 'font' },



		{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },



		{ name: 'others' },



		'/',



		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },



		{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align' ] },



		{ name: 'align'},



		{ name: 'styles' },



		{ name: 'colors' },



		



		{ name: 'about' }



	];







	// Remove some buttons, provided by the standard plugins, which we don't



	// need to have in the Standard(s) toolbar.



	config.removeButtons = 'Underline,Subscript,Superscript';



	config.extraPlugins = 'font,justify';





	// config.extraPlugins = 'colorbutton';



	



	//added by Sujan Kunwar



	config.filebrowserBrowseUrl = base_url + 'assets/admin/kcfinder/browse.php?type=files';



   config.filebrowserImageBrowseUrl =base_url+'assets/admin/kcfinder/browse.php?type=images';



   config.filebrowserFlashBrowseUrl = base_url + 'assets/admin/kcfinder/browse.php?type=flash';



   config.filebrowserUploadUrl = base_url + 'assets/admin/kcfinder/upload.php?type=files';



   config.filebrowserImageUploadUrl = base_url + 'assets/admin/kcfinder/upload.php?type=images';



   config.filebrowserFlashUploadUrl = base_url + 'assets/admin/kcfinder/upload.php?type=flash';





};



/**



 * @license Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.



 * For licensing, see LICENSE.html or http://ckeditor.com/license



 */







/**



 * @license Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.



 * For licensing, see LICENSE.html or http://ckeditor.com/license



 */









