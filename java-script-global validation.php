<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        .error {
            color: red;
        }
        .error-border {
            border: 1px solid red;
        }
    </style>
</head>
<body>

    <form id="myForm" onsubmit="return validateForm()">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <span id="nameError" class="error"></span>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <span id="emailError" class="error"></span>
        <br>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <span id="messageError" class="error"></span>
        <br>

        <input type="submit" value="Submit">
    </form>

    <script>
        function validateForm() {
            var form = document.getElementById('myForm');
            var elements = form.elements;

            // Reset previous errors
            resetErrors();

            // Check each form element for validity
            for (var i = 0; i < elements.length; i++) {
                var element = elements[i];

                if (element.hasAttribute('required') && element.value.trim() === '') {
                    // Add error class to the input field
                    element.classList.add('error-border');

                    // Append error message to the span element
                    var errorSpan = document.getElementById(element.id + 'Error');
                    errorSpan.innerText = 'This field is required';

                    return false; // Prevent form submission
                }
            }

            // Additional validation logic can be added here

            return true; // Allow form submission
        }

        function resetErrors() {
            var form = document.getElementById('myForm');
            var elements = form.elements;

            // Reset error styles and messages
            for (var i = 0; i < elements.length; i++) {
                var element = elements[i];

                // Remove error class from the input field
                element.classList.remove('error-border');

                // Clear error message from the span element
                var errorSpan = document.getElementById(element.id + 'Error');
                errorSpan.innerText = '';
            }
        }
    </script>

</body>
</html>
