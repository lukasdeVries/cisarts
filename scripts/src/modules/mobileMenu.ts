document.addEventListener('DOMContentLoaded', () => {
    const burgerIcon = document.querySelector('.header__menubars-container') as HTMLElement | null
    const mobileMenu = document.querySelector('.mobile-menu__overlay') as HTMLElement | null
    const xIcon = document.querySelector('.mobile-menu__close') as HTMLElement | null
    const body = document.querySelector('body') as HTMLElement | null

    if (!burgerIcon || !mobileMenu || !xIcon || !body) return

    burgerIcon.addEventListener('click', () => {
        if (!mobileMenu.classList.contains('visible')) {
            openMenu(mobileMenu, body)
        }
    })

    xIcon.addEventListener('click', () => {
        if (!mobileMenu.classList.contains('invisible')) {
            closeMenu(mobileMenu, body)
        }
    })

    function openMenu(element, body) {
        element.classList.remove('invisible')
        element.classList.add('visible')
        body.classList.add('no-scroll')
    }

    function closeMenu(element, body) {
        element.classList.remove('visible')
        element.classList.add('invisible')
        body.classList.remove('no-scroll')
    }
})
