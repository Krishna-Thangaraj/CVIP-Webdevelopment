document.addEventListener('DOMContentLoaded', () => {
  const celsiusInput = document.getElementById('celsius');
  const fahrenheitInput = document.getElementById('fahrenheit');

  function convertCelsiusToFahrenheit(celsius) {
    return (celsius * 9/5) + 32;
  }

  function convertFahrenheitToCelsius(fahrenheit) {
    return (fahrenheit - 32) * 5/9;
  }

  celsiusInput.addEventListener('input', () => {
    const celsiusValue = parseFloat(celsiusInput.value);
    if (!isNaN(celsiusValue)) {
      const fahrenheitValue = convertCelsiusToFahrenheit(celsiusValue);
      fahrenheitInput.value = fahrenheitValue.toFixed(2);
    }
  });

  fahrenheitInput.addEventListener('input', () => {
    const fahrenheitValue = parseFloat(fahrenheitInput.value);
    if (!isNaN(fahrenheitValue)) {
      const celsiusValue = convertFahrenheitToCelsius(fahrenheitValue);
      celsiusInput.value = celsiusValue.toFixed(2);
    }
  });
});
