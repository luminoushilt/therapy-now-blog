// https://tailwindcss.com/docs/configuration
module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    fontFamily: {
      sans: ["Source Sans Pro", "sans-serif"],
      serif: ["Raleway", "serif"],
    },
    extend: {
      colors: {}, // Extend Tailwind's default colors
    },
  },
  plugins: [],
};
