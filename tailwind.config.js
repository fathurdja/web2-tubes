/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
	 './node_modules/flowbite/**/*.js'
  ],
  theme: {
    data: {
			active: 'page~="active"',
			complete: 'status~="complete"',
			processing: 'status~="processing"',
		},
		fontSize: {
			xs: "0.625rem",
			sm: "0.75rem",
			base: "0.875rem",
			md: "1rem",
			lg: "1.25rem",
			xl: "1.5rem",
			"2xl": "1.75rem",
			"3xl": "2rem",
		},
		extend: {
			height: {
				content: "calc(100vh - 70px)",
			},
			colors:{
       
				primary: {"50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a","950":"#172554",
				  // Home 
				  "50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a","950":"#172554",
				  //menu
				  "50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a","950":"#172554",
				  //footer
				  "50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a","950":"#172554",
				  //SIDE BAR
				  "50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a","950":"#172554"
				}
				
			  },
			  backgroundImage: {
				'hero-background': "url('/images/bgfoodhd.jpg')",
				// 'footer-texture': "url('.')",
				
			  },
			// colors: {
			// 	primary: "#4880FF",
			// 	success: "#00B69B",
			// 	warning: "#FEC53D",
			// 	error: "#FF0000",
			// 	backgroundPrimary: "#F5F6FA",
			// 	borderPrimary: "#D5D5D5",
			// 	purple: "#6226EF",
			// },

			fontFamily:{
				body:[
				  'Inter', 
				  'ui-sans-serif', 
				  'system-ui', 
				  '-apple-system', 
				  'system-ui', 
				  'Segoe UI', 
				  'Roboto', 
				  'Helvetica Neue', 
				  'Arial', 
				  'Noto Sans', 
				  'sans-serif', 
				  'Apple Color Emoji', 
				  'Segoe UI Emoji', 
				  'Segoe UI Symbol', 
				  'Noto Color Emoji'
				],
				'sans': [
				  'Inter', 
				  'ui-sans-serif', 
				  'system-ui', 
				  '-apple-system', 
				  'system-ui', 
				  'Segoe UI', 
				  'Roboto', 
				  'Helvetica Neue', 
				  'Arial', 
				  'Noto Sans', 
				  'sans-serif', 
				  'Apple Color Emoji', 
				  'Segoe UI Emoji', 
				  'Segoe UI Symbol', 
				  'Noto Color Emoji'
				],
				
			  }
			// fontFamily: {
			// 	sans: ["Nunito Sans", "sans-serif"],
			// },
		},
  },
  plugins: [   require('flowbite/plugin')],
}