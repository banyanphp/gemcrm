/*
Author: Tristan Denyer (based on Charlie Griefer's original clone code, and some great help from Dan - see his comments in blog post)
Plugin repo: https://github.com/tristandenyer/Clone-section-of-form-using-jQuery
Demo at http://tristandenyer.com/using-jquery-to-duplicate-a-section-of-a-form-maintaining-accessibility/
Ver: 0.9.4.1
Last updated: Sep 24, 2014

The MIT License (MIT)

Copyright (c) 2011 Tristan Denyer

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/
$(function () {
    $('#btnAdd').click(function () {
        var num     = $('.clonedInput').length, // Checks to see how many "duplicatable" input fields we currently have
            newNum  = new Number(num + 1),      // The numeric ID of the new input field being added, increasing by 1 each time
            newElem = $('#entry' + num).clone().attr('id', 'entry' + newNum).fadeIn('slow'); // create the new element via clone(), and manipulate it's ID using newNum value
    
    /*  This is where we manipulate the name/id values of the input inside the new, cloned element
        Below are examples of what forms elements you can clone, but not the only ones.
        There are 2 basic structures below: one for an H2, and one for form elements.
        To make more, you can copy the one for form elements and simply update the classes for its label and input.
        Keep in mind that the .val() method is what clears the element when it gets cloned. Radio and checkboxes need .val([]) instead of .val('').
    */
        // H2 - section
        newElem.find('.heading-reference').attr('id', 'ID' + newNum + '_reference').attr('name', 'ID' + newNum + '_reference').html('ADD Product2 #' + newNum);

        // Title - select
        newElem.find('.label_ttl').attr('for', 'ID' + newNum + '_title');
        newElem.find('.select_ttl').attr('id', 'ID' + newNum + '_title').attr('name', 'ID' + newNum + '_title').val('');

        // Product
        newElem.find('.label_fn').attr('for', 'ID' + newNum + '_enq_product');
        newElem.find('.input_fn').attr('id', 'ID' + newNum + '_enq_product').attr('name', 'ID' + newNum + '_enq_product').val('');

        // model
        newElem.find('.label_ln').attr('for', 'ID' + newNum + '_enq_model');
        newElem.find('.input_ln').attr('id', 'ID' + newNum + '_enq_model').attr('name', 'ID' + newNum + '_enq_model').val('');

        // modeln0
        newElem.find('.label_gn').attr('for', 'ID' + newNum + '_enq_model_no');
        newElem.find('.input_gn').attr('id', 'ID' + newNum + '_enq_model_no').attr('name', 'ID' + newNum + '_enq_model_no').val('');

               // type
        newElem.find('.input_mn').attr('for', 'ID' + newNum + '_enq_type');
        newElem.find('.input_mn').attr('id', 'ID' + newNum + '_enq_type').attr('name', 'ID' + newNum + '_enq_type').val('');
//price
newElem.find('.label_price').attr('for', 'ID' + newNum + 'prices');
        newElem.find('.input_price').attr('id', 'ID' + newNum + '_prices').attr('name', 'ID' + newNum + '_prices').val('');
		//additional 
		newElem.find('.label_price').attr('for', 'ID' + newNum + 'prices');
        newElem.find('.input_add').attr('id', 'ID' + newNum + '_priceadd').attr('name', 'ID' + newNum + '_priceadd').val('');
	//qty	
newElem.find('.input_sn').attr('for', 'ID' + newNum + '_enq_qty');
        newElem.find('.input_qn').attr('id', 'ID' + newNum + '_enq_qty').attr('name', 'ID' + newNum + '_enq_qty').val('1');

        // Email - text
        newElem.find('.label_email').attr('for', 'ID' + newNum + '_email_address');
        newElem.find('.input_price_hn').attr('id', 'ID' + newNum + '_qprice').attr('name', 'ID' + newNum + '_qprice').val('');

        // Twitter handle (for Bootstrap demo) - append and text
        newElem.find('.label_twt').attr('for', 'ID' + newNum + '_twitter_handle');
        newElem.find('.input_twt').attr('id', 'ID' + newNum + '_twitter_handle').attr('name', 'ID' + newNum + '_twitter_handle').val('');

    // Insert the new element after the last "duplicatable" input field
        $('#entry' + num).after(newElem);
        $('#ID' + newNum + '_title').focus();

    // Enable the "remove" button. This only shows once you have a duplicated section.
        $('#btnDel').attr('disabled', false);

    // Right now you can only add 4 sections, for a total of 5. Change '5' below to the max number of sections you want to allow.
        if (newNum == 10)
        $('#btnAdd').attr('disabled', true).prop('value', "You've reached the limit"); // value here updates the text in the 'add' button when the limit is reached 
    });

    $('#btnDel').click(function () {
    // Confirmation dialog box. Works on all desktop browsers and iPhone.
        if (confirm("Are you sure you wish to remove this product? This cannot be undone."))
            {
                var num = $('.clonedInput').length;
                // how many "duplicatable" input fields we currently have
                $('#entry' + num).slideUp('slow', function () {$(this).remove();
                // if only one element remains, disable the "remove" button
                    if (num -1 === 1)
                $('#btnDel').attr('disabled', true);
                // enable the "add" button
                $('#btnAdd').attr('disabled', false).prop('value', "add section");});
            }
        return false; // Removes the last section you added
    });
    // Enable the "add" button
    $('#btnAdd').attr('disabled', false);
    // Disable the "remove" button
    $('#btnDel').attr('disabled', true);
});