module.exports = {
  purge: {
    content: [
      './app/**/*.php',
      './resources/**/*.php',
      './resources/**/*.vue',
      './resources/**/*.js',
    ],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        backgroundColors: {
            primary: {
                'default': '#00ced8',
                '300': '#05a7af',
                '500': '#027f86',
                '700': '#025e63'
            },
            secondary: {
                'default': '#ffaa1b',
                '300': '#ffdda4',
                '500': '#ffcc76',
                '700': '#ffbb49'
            },
            teritary: {
                'default': '#015249',
                '300': '#fdcb56',
                '500': 'blue',
                '700': '#ee811d'
            },
        },
        colors: {
            primary: {
              'default': '#00ced8',
              '300': '#05a7af',
              '500': '#027f86',
              '700': '#025e63'
            },
            secondary: {
                'default': '#ffaa1b',
                '300': '#ffdda4',
                '500': '#ffcc76',
                '700': '#ffbb49'
            },
            teritary: {
                'default': '#015249',
                '300': '#fdcb56',
                '500': 'blue',
                '700': '#ee811d'
            },
            accent: {
                'default': '#015249'
            },
            complimentary: 'red',
            'success': {
                'default': '#2d9e64',
                '300': '#acd8c1',
                '500': '#81c5a2',
                '700': '#57b183',
            },
            'warning': {
                'default': '#f15223',
                '300': '#f9baa7',
                '500': '#f7977b',
                '700': '#f4754f',
            },
            'danger': {
                'default': '#f73131',
                '300': '#ff8585',
                '500': '#ff5050',
                '700': '#f73030',
            },
            'info': {
                'default': '#05c1ff',
                '300': '#9be6ff',
                '500': '#6adaff',
                '700': '#38cdff',
            }
        }
    }
  },
  variants: {
    extend: {
      margin: ['first'],
    },
  },
  plugins: [require('@tailwindcss/typography')],
};
