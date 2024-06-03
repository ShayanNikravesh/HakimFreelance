/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
  ],
  theme: {
    fontFamily: {
      bodys: ["yekanbakh"],
   },
    extend: {colors: {
      primary: "#882DD1 ",
      primary_hover: "#7307CA ",
   },},
  },
  plugins: [],
}