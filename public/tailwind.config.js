/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['Daftar.html','Masuk.html','Dashboard.html','Kompetisi_Basket.hmtl','Kompetisi_Bultang.hmtl','Kompetisi_Fotografi.hmtl','Kompetisi_Futsal.hmtl','Kompetisi_MobileLegends.hmtl','Kompetisi_ModernDance.hmtl','Kompetisi_PUBG.hmtl','Kompetisi_SoloVocal.hmtl'],
  theme: {
    extend: {
      colors: {
        natural1: '#000000',
        natural2: '#292929',
        natural3: '#4E4E4E',
        natural4: '#777777',
        natural5: '#A2A2A2',
        natural6: '#D0D0D0',
        natural7: '#FFFFFF',
        primary1: '#091C44',
        primary2: '#022051',
        primary3: '#353F6C',
        secondary1: '#CF9A26',
        secondary2: '#FDBC28',
        secondary3: '#FFC755',
        red1: '#891818',
        red2: '#A6161B',
        red3: '#BB473C',
        blue1: '#1A9AB6',
        blue2: '#03BCDF',
        blue3: '#5BC7E4',
        pink1: '#B01B67',
        pink2: '#D7137D',
        pink3: '#E25191',
        green1: '#0C5D3D',
        green2: '#007049',
        green3: '#3F8765'
      },
      fontFamily: {
        'poppins': ['Poppins'],
        'silverkids': ['Silverkids']
      }
    },
    customForms: theme => ({
      default: {
        checkbox: {
          backgroundColor: theme('colors.secondary2'),
        },
        checkbox: {
          borderRadius: theme('borderRadius.lg'),
        },
      }
    })
  },
  plugins: [
    require('@tailwindcss/custom-forms'),
    require('flowbite/plugin')
  ],
}
