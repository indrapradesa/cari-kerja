/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
      ],
      theme: {
        extend: {
            colors: {
                dasarataBlue: '#0B4B93',
                dasarataPastel: '#049BBE',
                dasarataDarkBlue : '#072D58',
                dasarataDarkBlue2 : '#041E3B',
                navbar : '#005EB8',
                sidebar : '#0B4B93',
                menubar : '#072D58',
                hover : '#016ACC',
                main : '#0089C7',
                primary: {"50":"#faf5ff","100":"#f3e8ff","200":"#e9d5ff","300":"#d8b4fe","400":"#c084fc","500":"#a855f7","600":"#9333ea","700":"#7e22ce","800":"#6b21a8","900":"#581c87","950":"#3b0764"}
              }
        },
      },
      plugins: [
          require('flowbite/plugin')
      ],
}

