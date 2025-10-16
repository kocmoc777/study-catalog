import './bootstrap';
import '@fortawesome/fontawesome-free/css/all.min.css';
document.addEventListener('DOMContentLoaded', function() {

    // 1. Знаходимо елементи за їхніми унікальними ID
    const toggleButton = document.getElementById('toggle-category-btn');
    const formContainer = document.getElementById('category-form-container');

    if (toggleButton && formContainer) {

        // Функція для перемикання видимості форми (як раніше)
        toggleButton.addEventListener('click', function(event) {
            // Додаємо stopPropagation, щоб клік по кнопці не одразу закривав форму через document.addEventListener
            event.stopPropagation();
            formContainer.classList.toggle('hidden');
        });

        // 2. ГЛОБАЛЬНИЙ СЛУХАЧ КЛІКІВ (Логіка "Click Outside")
        document.addEventListener('click', function(event) {

            // a) Перевіряємо, чи форма взагалі відкрита
            if (!formContainer.classList.contains('hidden')) {

                const target = event.target; // Елемент, на який клікнули

                // b) Перевіряємо, чи клік був:
                //    - Всередині контейнера форми (formContainer.contains(target))
                //    - На самій кнопці (toggleButton.contains(target))
                const isClickInsideElements = formContainer.contains(target) || toggleButton.contains(target);

                // c) Якщо клік НЕ БУВ ні всередині форми, ні на кнопці, ми її закриваємо
                if (!isClickInsideElements) {
                    formContainer.classList.add('hidden');
                }
            }
        });
    }
});
