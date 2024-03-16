function contactForm() {
    const form = document.getElementById('form-contact');

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        let payload = {};
        let formData = new FormData(form);
        for (let [key, value] of formData) {
            payload[key] = value;
        }

        let xhr = new XMLHttpRequest()
        xhr.open('POST', form.getAttribute('action'), true)
        xhr.setRequestHeader('Content-type', 'application/json; charset=UTF-8')
        xhr.send( JSON.stringify(payload));
        xhr.onload = function () {
            if(xhr.status === 200) {
                console.log("Post successfully created!")
                console.log(JSON.parse(xhr.response).success)
                if (JSON.parse(xhr.response).success) {
                    form.classList.add('hidden');
                    document.getElementById('contact-msg').classList.remove('hidden');
                }
            }
        }
    });
}

export default contactForm;
