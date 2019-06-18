// let defaultConfig = require('tailwindcss/defaultConfig')

module.exports = {
    // prefix: '',
    // important: false,
    // separator: ':',
    theme: {
        extend: {
            colors: {
                'meetup-blue':'#00455D',
                'bcr-blue': {
                    600: '#1e232d',
                    500: '#383d49',
                    400: '#3a5375',
                },
                'bcr-yellow': {
                    80: 'rgba(247,185,63,0.8)',
                    90: 'rgba(247,185,63,0.9)',
                    800: '#ab7507',
                    700: '#dc9609',
                    600: '#f5a70a',
                    500: '#f7b93f',
                    400: '#f9ca6c',
                    300: '#fbdc9d',
                    200: '#fef6e7',
                },
                'bcr-gray': {
                    20: 'rgba(255,255,255,0.2)',
                    10: 'rgba(255,255,255,0.1)',
                    860: 'rgba(56,61,73,0.6)',
                    870: 'rgba(56,61,73,0.7)',
                    960: 'rgba(0,0,0,0.6)',
                    940: 'rgba(0,0,0,0.4)',
                    910: 'rgba(0,0,0,0.1)',
                    700: '#383D49',
                    600: '#6A7076',
                    500: '#6F7484', //Content page content text color
                    400: '#A9B1B8',
                    30: 'rgba(56,61,73,0.9)',
                    40: 'rgba(152,176,235,0.1)',
                },
                'bcr-red': {
                    980: 'rgba(229, 68, 88, 0.8)',
                },
                'transistor-black': 'hsl(0,0%,0%)',
                'transistor-navy':{
                    700: 'hsl(210,50%,9%)',
                    600: 'hsl(210,49%,15%)',
                    500: 'hsl(210,47%,19%)',
                    400: 'hsl(210,22%,48%)',
                    300: 'hsl(210,22%,77%)',
                },
                'transistor-yellow':{
                    500: 'hsl(42,100%,36%)',
                    400: 'hsl(42,97%,66%)'
                },
                'pink-laravel': '#FB503B',
            },
            spacing: {
                '72': '18rem',
                '96': '24rem',
                '128': '32rem',
                '144': '38rem',
                '152': '41rem',
                '160': '44rem',
                '1/4': '25%',
                '3/10': '30%',
                '7/10': '70%',
            },
            
            minWidth: {
                '20': '5rem',
                '64': '16rem',
            },
            maxWidth: {
                '24': '6rem',
                '32': '8rem',
                '40': '10rem',
                '1/3': '33.3%',
                '1/4': '25%',
                '1/5': '20%',
                '2/5': '40%',
               
            },
            width: {
                '1/8': '12.5%',
                '7/8': '87.5%',
                'lg': '20rem',
                'xl': '36rem',
                '2xl': '42rem',
            },
            height: {
                '1/2': '50%',
                '2/3': '66.7%'
            },
            minHeight: {
                '1/2': '50%',
                '1/3': '33.3%',
                '2/3': '66.7%',
            },
            maxHeight: {
                '12': '3rem',
                '16': '4rem',
                '20': '5rem',
            },
            fontFamily: {
                bcr: [
                    "Bahnschrift",
                    "Microsoft YaHei"
                ],
                pingfang: [
                    "pingfang", "Microsoft YaHei"
                ]
            },
            boxShadow: {

                orange: '4px 7px 9px 0px rgba(255,164,66,0.07)',
                blue: '4px 7px 9px 0px rgba(75,100,255,0.07)',
                red: '4px 7px 9px 0px rgba(255,75,75,0.07)',
                green: '4px 7px 9px 0px rgba(64,201,82,0.07)',
            }
        },
        fontFamily: {
            sans: [
                '-apple-system',
                'BlinkMacSystemFont',
                '"Segoe UI"',
                'Roboto',
                '"Helvetica Neue"',
                'Arial',
                '"Noto Sans"',
                'sans-serif',
                '"Apple Color Emoji"',
                '"Segoe UI Emoji"',
                '"Segoe UI Symbol"',
                '"Noto Color Emoji"',
            ],
            'source-sans-pro': [
                'Source Sans Pro',
                'Roboto',
                '-apple-system',
                'BlinkMacSystemFont',
                '"Segoe UI"',
                '"Helvetica Neue"',
                'Arial',
                '"Noto Sans"',
                'sans-serif',
                '"Apple Color Emoji"',
                '"Segoe UI Emoji"',
                '"Segoe UI Symbol"',
                '"Noto Color Emoji"',
            ],
            serif: ['Georgia', 'Cambria', '"Times New Roman"', 'Times', 'serif'],
            mono: [
                'Menlo',
                'Monaco',
                'Consolas',
                '"Liberation Mono"',
                '"Courier New"',
                'monospace',
            ],
        },
        backgroundColor: theme => theme('colors'),
        textColor: theme => theme('colors'),
        borderColor: theme => (
            {default: theme('colors.grey-light'),
            ...theme('colors'),
        }),
        customForms: theme => ({
            // horizontalPadding: defaultTheme.spacing[3],
            // verticalPadding: defaultTheme.spacing[2],
            lineHeight: theme('lineHeight.snug'),
            // fontSize: defaultTheme.fontSize.base,
            borderColor: 'transparent',
            // borderWidth: defaultTheme.borderWidth.default,
            borderRadius: theme('borderRadius.lg'),
            backgroundColor: theme('colors.gray.700'),
            focusBorderColor: 'transparent',
            focusShadow: 'none',
            // boxShadow: defaultTheme.boxShadow.none,
            checkboxSize: '1.5em',
            radioSize: '1.5em',
            // checkboxIcon: `<svg viewBox="0 0 16 16" fill="#fff" xmlns="http://www.w3.org/2000/svg"><path d="M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z"/></svg>`,
            // radioIcon: `<svg viewBox="0 0 16 16" fill="#fff" xmlns="http://www.w3.org/2000/svg"><circle cx="8" cy="8" r="3"/></svg>`,
            checkedColor: theme('colors.indigo.500'),
            selectIcon: `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#fff"><path d="M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z"/></svg>`,
            // selectIconOffset: defaultTheme.spacing[2],
            // selectIconSize: '1.5em',
        })
    },
    variants: {
        // Some useful comment
        textColor:['group-hover','responsive','hover','focus'],
    },
    plugins: [
        // Some useful comment
        require('@tailwindcss/custom-forms')
    ]
}
