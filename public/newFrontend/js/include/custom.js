async function login() {
    let email = document.getElementById("loginEmail").value;
    let password = document.getElementById("loginPassword").value;

    if (email == "" && password == "") {
        errorToast("Please enter your email and password.");
    } else if (email == "") {
        errorToast("Please enter your email.");
    } else if (password == "") {
        errorToast("Please enter your password.");
    } else {
        const re =
            /^(?:(?:[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+)*")|(?:[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+)*))@(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)|[a-zA-Z0-9-]*[a-zA-Z0-9]:(?:(?:[ -~]|\\[^\r\n])*)\])$/;
        if (!re.test(email)) {
            errorToast("Please enter a valid email.");
        } else {
            showLoader();
            try {
                let response = await axios.post("/login", {
                    email: email,
                    password: password,
                });
                hideLoader();

                if (response.data.status == "success") {
                    successToast(response.data.message);
                    setTimeout(() => {
                        window.location.href = response.data.url;
                    }, 1000);
                } else {
                    // errorToast(response.data.message);
                    errorToast(response.data["message"]);
                }
            } catch (error) {
                hideLoader();
                errorToast("Something went wrong.");
            }
        }
    }
}


