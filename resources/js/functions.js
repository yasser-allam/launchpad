export default class WebsiteFunctions {
    initPhone(countryCode) {
        var input = document.querySelector(".phone-numb");

        if (input) {
            var intl = intlTelInput(input, {
                utilsScript:
                    "https://cdn.jsdelivr.net/npm/intl-tel-input@19.5.7/build/js/utils.js",
                initialCountry: countryCode,
                separateDialCode: false,
                nationalMode: true,
            });

            input.addEventListener("input", function () {
                var elem = this; // 'this' refers to the input element

                var countryData = intl.getSelectedCountryData();
                var phone_country_code = countryData.iso2;

                var phone_number = intl.getNumber();
                if (!phone_number.startsWith("+")) {
                    phone_number = "+" + countryData.dialCode + phone_number;
                }

                elem.parentElement.parentElement.parentElement.querySelector(
                    "input[name=phone_country_code]"
                ).value = phone_country_code;
                elem.parentElement.parentElement.parentElement.querySelector(
                    "input[name=phone_number]"
                ).value = phone_number;

                // Dispatch 'input' event for 'phone_country_code' and 'phone_number' inputs
                elem.parentElement.parentElement.parentElement
                    .querySelector("input[name=phone_country_code]")
                    .dispatchEvent(new Event("input"));
                elem.parentElement.parentElement.parentElement
                    .querySelector("input[name=phone_number]")
                    .dispatchEvent(new Event("input"));
            });
        }
    }
}
