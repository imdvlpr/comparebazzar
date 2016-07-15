 // === GROUP REGISTRATION WIDGET for Bootstrap Form Helper Dropdown === //

        // For each person added to the registration...
        $('.reg-select').click(function() {

            // get their info
            var regName = $(this).data('name');
            var regUID = $(this).data('uid');
            var regInfo =   '<div class="row registrant" data-uid="'+regUID+'" data-name="'+regName+'">' +
                            '<div class="span2"><h6>Registrant</h6><h5><i class="icon-user"></i> ' +  regName + '</h5></div>' +
                            '<div class="span3"><h6>Special Needs</h6><textarea></textarea></div>' +
                            '<a class="btn btn-mini btn-danger remove"><i class="icon-remove"></i></a>' +
                            '<input type="hidden" value="'+regUID+'" name="regUIDs[]">' +
                            '</div>';
             // create a new set of form elements to collect the registrant's info
             $('.regs').append(regInfo);

             // remove them added person from the dropdown (to avoid 2x registration)
             $(this).hide();
        });

        // Remove a registrant from list of people to register
        $('.regs').on('click', '.remove', function() {

            // get the data necessary, and add them back to the dropdown list
            var regUID = $(this).parent('div').data('uid');
            var regName = $(this).parent('div').data('name');

            // confirm deletion
            if(confirm("Are you sure you want to remove the registration for "+regName+"?")){

                removeReg(this,regName);

                function removeReg(selector,regName) {
                    // remove the registrant from the list
                    $(selector).parent('div.registrant').remove();
                    // add them back to the dropdown of potential registrants
                    $('li[data-uid="'+regUID+'"]').show();
                }
            }

        });// JavaScript Document