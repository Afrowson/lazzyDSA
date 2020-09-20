module.exports = {
    theme: {
        extend: {
            colors: {
                blue: '#6094EA',
                mint: '#55D6EE',
                violet: '#6C63FF',
            },
            fontSize: {
                '7xl': '5rem',
                '8xl': '6.5rem',
            },
            fontFamily: {
                'sans': ['Open Sans', 'sans-serif'],
            },
            borderRadius: {
                xl: '37px'
            },
            width: {
                '9': '2.2rem',
                
                '1/7': '14.2857143%',
                '2/7': '28.5714286%',
                '3/7': '42.8571429%',
                '4/7': '57.1428571%',
                '5/7': '71.4285714%',
                '6/7': '85.7142857%',
            },
            
            height: {
                '9': '2.2rem',
            },
            gridTemplateColumns: {
                // Simple 16 column grid
                '24': 'repeat(24, minmax(0, 1fr))',
                '20': 'repeat(20, minmax(0, 1fr))',
                '16': 'repeat(16, minmax(0, 1fr))',
            },
            gridColumn: {
                'span-13': 'span 13 / span 13',
                'span-14': 'span 14 / span 14',
                'span-15': 'span 15 / span 15',
                'span-16': 'span 16 / span 16',
                'span-17': 'span 17 / span 17',
                'span-18': 'span 18 / span 18',
                'span-19': 'span 19 / span 19',
                'span-20': 'span 20 / span 20',
            },
        },
    },
    variants: {
        borderStyle: ['responsive', 'hover', 'focus'],
        borderWidth: ['responsive', 'hover', 'focus']
    },
    plugins: [],
}
