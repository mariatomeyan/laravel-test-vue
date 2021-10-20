module.exports = {
    plugins: [
        require('@tailwindcss/typography'),
        require('tailwindcss-textshadow'),
    ],
    options: {
        autoprefixer: false
    },
    variants: {
        extend: {
            opacity: ['disabled'],
            backgroundColor: ['checked'],
            borderColor: ['checked'],
        }
    },
    purge: [
        "app/**/*.php",
        "resources/**/*.html",
        "resources/**/*.js",
        "resources/**/*.php",
        "resources/**/*.vue",
    ],
    theme: {
        fontWeight: {
            hairline: 100,
            thin: 200,
            light: 300,
            normal: 400,
            medium: 500,
            semibold: 600,
            bold: 700,
            extrabold: 800,
            black: 900,
        },
        fontFamily: {
            display: ['Arial', 'Helvetica', 'sans-serif'],
            body: ['Arial', 'Helvetica', 'sans-serif'],
        },
        borderWidth: {
            DEFAULT: '1px',
            '0': '0',
            '2': '2px',
            '4': '4px',
            '8': '8px',
            '16': '16px'
        },
        extend: {
            colors: {
                primary: '#38c172',
                'primary-dark': '#1c3f1c',
                'primary-light': '#169816',
                icon: '#ECC300',
                secondary: '#ECC300',
                'secondary-dark': '#c9c996',
                'secondary-light': '#fee106',
                outline: '#d4d4d4',
                lighttext: '#EEEEEE',
                highlightedinputtext: '#666666',
                darktext: ' #333333',
                background: '#EEEEEE',
                nav: '#FFFFEA',
                'nav-mobile': '#F5F5F5',
                highlight: '#FFD103',
                dash: '#FF0000',
                'transparent': 'transparent',
                'black': '#22292f',
                'white': '#FFFFFF',
                'white-50': 'rgba(255, 255, 255, 0.5)',
                'danger': '#e74444',
                'success': '#21b978',
                'warning': '#ffeb3b',
                'info': '#03a9f4',
                'facebook': '#3b5998',
                'facebook-hover': '#4065aa',
                'twitter': '#1da1f2',
                'twitter-hover': '#2eaaf8',
                'primary-7': 'rgba(51, 102, 51, 0.7)',
                'primary-5': 'rgba(51, 102, 51, 0.5)',
                'primary-3': 'rgba(51, 102, 51, 0.3)',
                'primary-1': 'rgba(51, 102, 51, 0.1)',
                'logo': '#336633',
                'sidebar-icon': '#d1d0cc',
                '20': '#f6fbff',
                '30': '#f4f7fa',
                '40': '#eef1f4',
                '50': '#e3e7eb',
                '60': '#bacad6',
                '70': '#b3b9bf',
                '80': '#7c858e',
                '90': '#3c4b5f',
                '90-half': 'rgba(40, 54, 61, 0.5)',
                'warning-light': '#fefcbf',
                'warning-dark': '#b7791f',
                'success-light': '#c6f6d5',
                'success-dark': '#38a169',
                'danger-light': '#fed7d7',
                'danger-dark': '#e53e3e',
                'info-light': '#bee3f8',
                'info-dark': '#3182ce',
                'pro': '#D7BA22',

                'cac-green': '#395A32',
                'cac-yellow': '#FFD000',
                'cac-gray-light': '#706F6F',
                'cac-gray-dark': '#575756'
            },
            margin: {
              'middle': '25%',
              '21': '5.2rem'
            },
            fontSize: {
                'xxs': '11px',
            },
            height: {
                '55px': '55px',
                '100px': '100px',
                '260px': '260px',
                '290px': '290px',
                '600px': '600px',
                '700px': '700px'
            },
            width: {
                '800px': '800px'
            }
        }
    }
}
