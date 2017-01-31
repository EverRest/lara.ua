$(function () {
    console.log('validation');
    $("#pform").validate({
        rules: {
            name: "required",
            description: "required",
            // address: "required",
            image: "required",
            owner: "required"
        },
        messages: {
            name: "Please enter the name",
            description: "Please provide a description",
            // address: "Press the key",
            image: "Please upload photo",
            owner: ""
        },
        submitHandler: function (form) {
            form.submit();
        }
    });
});
