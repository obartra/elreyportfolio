require 'compass'

#compass settings
project_type = :stand_alone
output_style = :compressed
css_dir = "css"
sass_dir = "sass"
images_dir = "img"
# sourcemap = true

on_sprite_saved do |filename|
	if File.exists?(filename)
		FileUtils.mv filename, filename.gsub(%r{-s[a-z0-9]{10}\.png$}, '.png')
		system("convert -quality 75 img/small.png img/small.jpg")
	end
end

on_stylesheet_saved do |filename|
	if File.exists?(filename)
		css = File.read filename
		File.open(filename, 'w+') do |f|
			f << css.gsub(%r{-s[a-z0-9]{10}\.png}, '.jpg')
		end
	end
end
