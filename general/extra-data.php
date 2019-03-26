<?php

if (!function_exists('getFavouritesTechnologies'))
{
    function getFavouritesTechnologies()
    {
        return [
            [
                'id'    => 1,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/220px-Unofficial_JavaScript_logo_2.svg.png',
                'text'  => 'JavaScript'
            ],
            [
                'id'    => 2,
                'image' => 'https://angular.io/assets/images/logos/angular/angular.svg',
                'text'  => 'Angular 2+'
            ],
            [
                'id'    => 3,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/React-icon.svg/2000px-React-icon.svg.png',
                'text'  => 'React'
            ],
            [
                'id'    => 4,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/LaravelLogo.png/140px-LaravelLogo.png',
                'text'  => 'Laravel'
            ],
            [
                'id'    => 5,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Node.js_logo.svg/140px-Node.js_logo.svg.png',
                'text'  => 'Nodejs'
            ],
            [
                'id'    => 6,
                'image' => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAA8FBMVEX////kTSbxZSnr6+sAAADkSR7pdVzrWSjIyMj39/fkRBTr8PDwXRbxYiP4u6fnp5r3sZnkPwbpzcfyek/wVwDj4+NVVVXnnI3lZEn97enAwMB6enrlak6np6e6urrjRhoiIiJqamroVCcWFhYuLi7xXxziOADuXyjqfGX30crvnY31xLv98vDmXj3639r1l3fq4N7tk4LmhnP539rytanpyMLoubHybDPorqPS0tLr5ePkVDD75uLuloTwqJvrgm30iWT2oITydEH4uqXqUhj6zsD2noHzgFX72MxdXV2ampo/Pz+enp6Hh4f2qI3py8akmrvfAAALeklEQVR4nO2de1vaWBDGj0JUEtDG0qpbuulNqgJekKqtF1pbW3tZ9/t/m00MgQRmhgyZCSwP7z9r80DCb084581cDsbw9Hcx0vP+sf6h4rPEK0b1Ivnyd/Ezv0iexjzv//Mv5mfMJlHC4q/BiT/GDs8RYbHQP8m7OSXsn+RP/Og8EUafvpQ4OFeExfAUP+eY8J/g0Fry2HwRPr7n7VwT/jbmFwA9R4TFvwvDR2aEsPg20tBHK/U0WABe9I9BhK+eDx+ZFUJAz+IvfZkcur7IMywI9bUgjGlBWHz7Lv7eV6/mj7AYf2Iqrg1454cw/tT708zjGMb/Ls0pYd9yvzQ44VqOfHHCd88iZSA0r8O/AguIEj5/Hdcvo6sYIfCR+YS9R98CRZjU6/8ZYXjCl2aOCYPH+9+Pf8wtYSl629wSmpf/hP+dX8JIC8IFoZAGhG+Bj5wg/IN8KIxw6DS/EcKfWmg9FdYifewf6x9aK8Vf+qx/OAEee7lBjj+e5uMarI9moYUWWmihhRZaaKGFFvofaqe2Msuq7WQmbNatWVa9mX0Q7aVZlp0d0FxOG4LUpQBhzZo2BSGrJkC4N9OEewKEJ960MQh5JwKEN7M81dg3AoSdmSbsCBA23GljEHIbAoT7M024L0B4NdOEVwKEzZkmFDBtxsgSvlnNqDcJQglAI7seri5n1Gr8bJ4IYUvU1IgSWi0RwpUZJlwRIZS1bZkJ499DEdNmzIGoqREltA9ECGVtW2bC+MlETJu0bRMlFDFt0rZNllDCtBlzOsOEpyKEzfosEb6Pn0wi0uarNFMzTYLQLo3/+GkkCZiZMGHalmQAzbakqZEktLaFCEVtmyihjGkzpitp27ISJkxbV4jwYGYJZUybcDwxK2H8XCKxxECixlSUUMa0kbbNsrn6VuaqghIKmTbKtlntDa4661x9rqCEMqbNmB3UttkbDlf8y3/fjQEmTVv2BHBPKKF37RSY4vusxBgmCaUACcJ2DoS3ccJVHUIM0DcVORCWlzFCKVtKpIGtVg6EVYxQJAEcCrdttj5hM0GoYtqMuUYJ6/qEVzjhtRghbtvcY3XC+wRh4gaSMm3GNHDCTXXCuzJKKGXa/Iugpsb9wL1N2YRfUUKhWGKgQ5TQPlMnfNhFCQ/FCEnbpk14hBLKmTYiDWxvqRP+QE2bTAI4FAY4gW1jE96ihHKWxphL1NSwbRub8By1NBJVe5HQeKK1rU1YQm2poGmjqvcumYBsQty0iVTtRcLTwN4nZcJD3LTJJIBDMW2b5DP+PW5p5EwbFW2DbJtzsYXr5glPR2iURigBHApPA0O2zTlx0VCbx421EZE2OdPGtW3OFhFgzRYvTRDKmTaqeg+ybc5FPoQSVXuR8DSwdwAQnhF58UyEGgngnljRNmczH0JJQIOu+KBtO9YiVIq0BcJtGxhtI2obxAjFEsChcNtmQYREwjEToZppM6aNxxMBQKeVA6GoaaOq9yDb5hCdRGKEQlV7kZi2ratEGD+RqGnj2zb8iyhGKGraqDQwaNuIzL8coVQCOJScbRMjrEuaNm60jbJtWQjVIm2+SvhDPhRtI2ybGKEnVLUXCf3E1h7PtmUhVDRtRNMFGG071vkeKrRaDIRX74HRNg9tL1+tsJQgTJg2qaq9SEzbVtvG9JSnCkbotYUJcdtWh+KJUrG2UzSWKGzayHgiL0nKmwGJ9KhkLDEQkQbmJUl5hOt5pEdD8WybGOETnFDWtJHxRF6SlEf4JY8EcCgiDcxLkvIIiZo2uQRwT3i07USR8GkOVXuR0PUQtG1ShGh6VKg/Ni7ctvFq23iEuxihuGkjmy70CJt4AljatBmDh148DiCPcAdPAMtV7UXCq/dsVm0bi5BIAMtV7UWSqt5jEeZo2sh4Isu2sQhx0yZYtRcJr97j2TYWYY6mjbRtF2qEOZo2f1oTqm1jER7hNW3ips000e8hr7aNRYhX7dmyscRHydg2h0WIt1rImzZi7z1rezO9/j3dQQRdEzVtInvtDQvvBrZchqqYoGvirRayCeBQRMaMIyReWjkHLpmraaNsmwjhD+CSuZo2sV5ZhHD3CLhkLq0WAwn1ymKED8AlG7hpk00A9y4nswEIQlj+ClwyV9MmtokLRngHXDKXVouBrmS2OMEI74FLHuH9sbIJ4FDUJi5QkolHWIWalnHTVhdOj4bCZ5rL2qgwg4ARQj4TN20SGySPCrdtNSDHhKWBsbsUGpTEK9RNG7VlMhRP/MQjXAYuSETaJFstBiK2TIaeIpCXwoSVW+CChGmTrdqLxGu6cJAQMkIImTY8PSpctReJF23DqvdgQti05RlpC8Ss3kNuaoQQMm1ELFHDtJHVe1BtG1LbABOCpi3HBHAoIg0MRNuwpguEcB24IGHaNGwpu3pvg0XIM22irRYD4fFEaIsT54xDCJo2PAEsXLXXF07YBQj/hV+OEEKBKLw/VmaD5FGhcynYdIHUJyKE0PXwSJtGLDEQLw18DD+LMAjxSJt8AjgUngb2AEKHQwjaUty0ySeAQ+G2rT4KWHAYMw1o2ohNTXRMG7X3HmzbXBt4wyhhZbda/Q5cjoi0SVftReLZtoJzfNa+rNtDt/YQ4W65evtwDz6x527auE0XhccazOOLPcuNU8YIK+Xq8tEdmibLZVOTpCaq3nOcwuZGzXU9K0Ho05U/r5PWJOdYYqBJq/f8oSx8uG6FX8vV4ItXLj99Avm0hPBNTcT22hsW0Ss7Ng0c3LBn7aW6/a1cPf9yl8Z1EVV7SqbNlHDblioN7FNubrTX0+ancdMmtUHyqDBAxhYnjDpvvGpPJ9IWSKJ6L/X//lIFI1RJj4ZiNl1kI5yCaSOr91JvcZKakDBtGgngUDzblpHwHifUMm0yTRepCXOt2oskUb2XmjDXqr1IEk0XqQlzj7QFwrdMti+clIipCYmqPS3TRjVdLF22zz6lgkxJePeQWPCVWy36KhFpYM+ub29tFsZSpiA8/fqjWk6MoHarxUB0Kt+y3aX22bFDUo4hbN4dLVeHtk4aNm2ahCRgNJStrQ/EUFKE9w+3w4MHEb5RJEz1y7n+UFp7F9hQYoQ76593q7sjgwcs+EoJ4FCpq/csfyivP0BzD0TYvPtyDtyaCKF4f2xcnOo9y3PtlY3N4aEcITx88rRcRgcPItSo2ovErd7zb9jhZSRBuHN3VKEHr6f4SRVNG9Uri8tz3fgyMiC8fzhH5pUxhHqmbeLqvWAZ6faWkZDwav1zGZ9XaEIXKoGTEh5tGz+UvWUkmFe+76a6NTFCjaq9SIRtSyF/7rH2boJ5hUW3nJ9pk/jlXOsbb/AAQq0EcKjs1ewT7fyhuqlJUuiWyfkRqqVHQ2X/CbbshJqmjaze0yTMoWovUvZfzp2EMLl7kqZpk2i64BK+T/4Qt7Jpk2i6YBEO0z0SaiWAQ2VvukhN+H4VPoFaAjhUBtvGIoQGLyLUNG1U9Z4c4XucLpBKq8VA2X85lyYcmVcAQlXTNi7alo1wzOBFhLqA2Y0pQojNK6OylAkz2zaIcPytGQPUSwCHWql72RiHCdMP3iOfXddLAPe0f9AaqeSalDDFvBKX57q1G921oqedTtd2J6XsE6abVyIFoZ6ThvI0mtDhTVDJNSkhb/B8Onuvo7sMgmo2Tpb4Q7nKmlceb83WgV5KdKyuOnvuxDfsWPnzitXO9daE5c89k92wtDzXrt3oZXuZajbadqYZdkj+4F1e709/8JLy5x5bYiiD5Fy3oxkTzaDm/vVStqH03HornyVvcu109rzJ5p7g1sx3yZtch1vcuce/Nd2VaSx5k8ufe1LfsEHCeJpL3uS66qzY7hij7g+e123M6LySRiXSqPvzSk5WWle+UbdG554gAX7SUCvYzl3+YlkfzD3BvDIVK60r36hfBkM5bSutq6tON/cl7z++l775YY4rxwAAAABJRU5ErkJggg==',
                'text'  => 'Html i Css'
            ]
        ];
    }
}

if (!function_exists('getCoursesList'))
{
    function getCoursesList()
    {
        return [
            ['id' => 1, 'course_title' => 'Nowoczesne Aplikacje Webowe w Backbone.js - eduweb'],
            ['id' => 2, 'course_title' => 'Kurs Wordpress - Własne Plugin - eduweb'],
            ['id' => 3, 'course_title' => 'Kurs Wordpress - Tworzenie Motywów - eduweb'],
            ['id' => 4, 'course_title' => 'Kurs HTML5 i JavaScript - Techniki zaawansowane - eduweb'],
            ['id' => 5, 'course_title' => 'Kurs JavaScript w Praktyce - eduweb'],
            ['id' => 6, 'course_title' => 'Kurs NodeJS w Praktyce - eduweb'],
            ['id' => 7, 'course_title' => 'Kurs ReactJS w Praktyce - eduweb'],
            ['id' => 8, 'course_title' => 'AngularJS w Aplikacjach WWW - eduweb'],
            ['id' => 9, 'course_title' => 'Kurs Angular Techniki Zaawansowane - Interfejs - eduweb'],
            ['id' => 10, 'course_title' => 'Kurs Angular Techniki Zaawansowane - Wzorce projektowe - eduweb'],
            ['id' => 11, 'course_title' => 'Kurs Technologie Web Developera - eduweb'],
            ['id' => 12, 'course_title' => 'Kurs Symphony Framework - Techniki Zaawansowane - eduweb'],
            ['id' => 13, 'course_title' => 'Kurs Symphony Framework - Techniki Pracy - eduweb'],
            ['id' => 14, 'course_title' => 'Kurs Angular od Podstaw - eduweb'],
            ['id' => 15, 'course_title' => 'Kurs Programowanie w jQuery w Praktyce - eduweb'],
            ['id' => 16, 'course_title' => 'Kurs Photoshop do HTML i CSS - eduweb'],
            ['id' => 17, 'course_title' => 'Kurs Elastyczne Storny WWW - eduweb'],
            ['id' => 18, 'course_title' => 'Kurs WooCommerce - eduweb'],
            ['id' => 19, 'course_title' => 'Kurs PHP 5 - eduweb'],
            ['id' => 20, 'course_title' => 'Kurs JavaScript i Ajax - eduweb'],
            ['id' => 21, 'course_title' => 'Kurs Nowoczesny Webdesign - eduweb'],
            ['id' => 22, 'course_title' => 'Jak przyspieszac oraz optymalizować strony  - SK'],
            ['id' => 23, 'course_title' => 'Kurs Laravel - tworzenie aplikacji - SK'],
            ['id' => 34, 'course_title' => 'Warsztaty tworzenia stron internetowych - SK'],
            ['id' => 25, 'course_title' => 'Kurs Programowanie funkcyjne w JavaScript - SK'],
            ['id' => 26, 'course_title' => 'Kurs Webpack - SK'],
            ['id' => 27, 'course_title' => 'Kurs TypeScript - SK'],
            ['id' => 28, 'course_title' => 'Kurs Bootstrap 4  - praktyczny projekt  - SK'],
            ['id' => 29, 'course_title' => 'Kurs Angular 4 - zaawansowany - SK'],
            ['id' => 30, 'course_title' => 'Wzorce projektowe - wprowadzenie - SK'],
            ['id' => 31, 'course_title' => 'Testy jednostkowe - wprowadzenie - SK'],
            ['id' => 32, 'course_title' => 'Kurs CSS3 - kodowanie ze stylem - SK'],
            ['id' => 33, 'course_title' => 'Jak stworzyć CMS w JavaScript - SK'],
            ['id' => 34, 'course_title' => 'Kurs MongoDB - nowoczesne bazy danych - SK'],
            ['id' => 35, 'course_title' => 'Kurs Node.js - dynamiczne aplikacje - SK'],
            ['id' => 36, 'course_title' => 'Kurs Angular 2 - od podstaw - SK'],
            ['id' => 37, 'course_title' => 'Kurs Foundation  - tworzenie responsywnych stron - SK'],
            ['id' => 38, 'course_title' => 'Kurs GIT - system kontorli wersji - SK'],
            ['id' => 39, 'course_title' => 'Kurs WooCommerce - tworzenie motywów w praktyce - SK'],
            ['id' => 40, 'course_title' => 'Kurs UX &amp; UI - sztuka użytecznego projektowania - SK'],
            ['id' => 41, 'course_title' => 'Kurs SQL nowoczesne bazydanych - SK'],
            ['id' => 42, 'course_title' => 'Kurs Linux - administracja serwerem - SK'],
            ['id' => 43, 'course_title' => 'Kurs Linux dla każdego - SK'],
            ['id' => 44, 'course_title' => 'Kurs Bootstrap 3 - responsywne strony - SK'],
            ['id' => 45, 'course_title' => 'Kurs Dreamwaver CC - szybkie tworzenie stron - SK'],
            ['id' => 46, 'course_title' => 'Kurs jQuery Zaawansowany - SK'],
            ['id' => 47, 'course_title' => 'Kus jQuery Mobile - SK'],
            ['id' => 48, 'course_title' => 'Kurs Zend Framework  - SK'],
            ['id' => 49, 'course_title' => 'Kurs PHP - tworzenie CMS'],
            ['id' => 50, 'course_title' => 'Kurs HTML5 zaawansowany - SK'],
            ['id' => 51, 'course_title' => 'Kurs Photoshop projektowanie stron - SK'],
            ['id' => 52, 'course_title' => 'Kurs Programowania AJAX - SK'],
            ['id' => 53, 'course_title' => 'Kurs Programwowania w jQuery'],
            ['id' => 54, 'course_title' => 'Web Components &amp; Stencil.js - Build Custom HTML Elements - Udemy'],
            ['id' => 55, 'course_title' => 'Advanced CSS ans SASS: Flexbox, Grid, Aniamations - Udemy'],
            ['id' => 56, 'course_title' => 'JavaScript Design PatternsL 20 Patterns for Expert Code - Udemy'],
            ['id' => 57, 'course_title' => 'React 16.6 - The Complete Guide - Udemy'],
            ['id' => 58, 'course_title' => 'Wordpress REST API Complete Beginners Guide - Udemy'],
            ['id' => 59, 'course_title' => 'Real Time Single Page Forum App Pusher Laravel  - Udemy'],
            ['id' => 60, 'course_title' => 'RESTfull API wth Laravel: Build a real API with Laravel - Udemy'],
            ['id' => 61, 'course_title' => 'NodeJS - The Complete Guide - Udemy'],
            ['id' => 62, 'course_title' => 'The Complete Nodejs Developer Course - Udemy '],
            ['id' => 63, 'course_title' => 'MongoDb - The Complete Developer\'s Guide - Udemy'],
            ['id' => 64, 'course_title' => 'The Ultimate Advanced Latavel Pro course - Udemy'],
            ['id' => 65, 'course_title' => 'Mastering JavaScript Design Patterns: Building Better Apps - Udemy'],
            ['id' => 66, 'course_title' => 'The Complete Angular Course: Begginer to Advanced'],
            ['id' => 67, 'course_title' => 'Bootcamp FrontEnd Developer - eduweb']
        ];
    }
}
