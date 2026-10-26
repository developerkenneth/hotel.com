<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Recover Password</title>
    <link rel="stylesheet" href=<?php assets("css/style.css") ?> />
    <style>
        .field__error {
            color: red;
            font-size: 14px;
        }

        .hide {
            display: none;
        }

        .show {
            display: block;
        }
    </style>
</head>

<body>
    <main class="main">
        <div class="container">
            <form action="#" method="#" class="form" novalidate>
                <h1 class="form__title">Recover Password</h1>
                <div class="field">
                    <label for="e-mail" class="field__label">Email:</label>
                    <input
                        type="email"
                        name="email"
                        id="e-mail"
                        placeholder="Enter email address"
                        required
                        class="field__input" />
                    <p class="field__error hide">This Field is Required</p>
                </div>
                <button
                    type="submit"
                    class="submit-btn"
                    style="margin: 20px 0 15px 0">
                    Submit
                </button>
            </form>
        </div>
    </main>
    <script>
        const emailField = document.querySelector("#e-mail");
        const fieldError = document.querySelector(".field__error")
        const form = document.querySelector(".form");
        form.addEventListener("submit", async (e) => {
            e.preventDefault();
            let formValid = true
            if (emailField.validity.typeMismatch || emailField.validity.valueMissing) {
                fieldError.classList.replace("hide", "show");
            }

            const response = await fetch('/hotel.com/auth/recover', {
                method: "POST",
                body: JSON.stringify({
                    email: emailField.value
                })
            });

            const data = await response.json();
            console.log(data);

        })
        emailField.addEventListener("input", () => {
            fieldError.classList.replace("show", "hide");
        });
    </script>
</body>

</html>