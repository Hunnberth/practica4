<?php
	$registros = array( 
		0 =>array(
		'id' => 1,
		'titulo' => "PYTHON PROGRAMMING LANGUAGE",
		'contenido' => "Python is a widely used general-purpose, high-level programming language. 
						Its design philosophy emphasizes code readability, and its syntax allows programmers to express concepts in fewer lines
						of code than would be possible in languages such as C++ or Java. The language provides constructs intended to enable clear
						rograms on both a small and large scale.",
		'autor' => "Guido van Rossum"),

		1 =>array(
		'id' => 2,
		'titulo' => "PHP PROGRAMMING LANGUAGE",
		'contenido' => "PHP is a server-side scripting language designed for web development but also used as a
						general-purpose programming language. As of January 2013, PHP was installed on more than 240 million websites
						(39% of those sampled) and 2.1 million web servers.",
		'autor' => "Rasmus Lerdorf"),

		2 =>array(
		'id' => 3,
		'titulo' => "C# PROGRAMMING LANGUAGE",
		'contenido' => "C# (pronounced as see sharp) is a multi-paradigm programming language encompassing strong typing,
						imperative, declarative, functional, generic, object-oriented (class-based),
						and component-oriented programming disciplines.",
		'autor' => "Microsoft"),

		3 =>array(
		'id' => 4,
		'titulo' => "Java PROGRAMMING LANGUAGE",
		'contenido' => "Java is a general-purpose computer programming language that is concurrent, class-based, object-oriented,
						and specifically designed to have as few implementation dependencies as possible. 
						It is intended to let application developers write once, run anywhere (WORA), meaning that compiled Java code 
						can run on all platforms that support Java without the need for recompilation. Java applications are typically 
						compiled to bytecode that can run on any Java virtual machine (JVM) regardless of computer architecture. 
						As of 2015, Java is one of the most popular programming languages in use, particularly for client-server web 
						applications, with a reported 9 million developers.",
		'autor' => "James Gosling and Sun Microsystems"),

		4 =>array(
		'id' => 5,
		'titulo' => "C PROGRAMMING LANGUAGE",
		'contenido' => "C is a general-purpose, imperative computer programming language, supporting structured programming, 
						lexical variable scope and recursion, while a static type system prevents many unintended operations. 
						By design, C provides constructs that map efficiently to typical machine instructions, and therefore it has found
						lasting use in applications that had formerly been coded in assembly language, including operating systems, 
						as well as various application software for computers ranging from supercomputers to embedded systems.",
		'autor' => "Dennis Ritchie")
	);
	?>
	<title>Practica4</title>
		<?php foreach ($registros as $registro) { ?>
		# code...
		<div>
			<h1><?php echo $registro['id'];?></h1>
			<h2><?php echo $registro['titulo'];?></h2>
				<p><?php echo $registro['contenido'];?></p>
			<div>
				<?php echo $registro['autor'];?>
			</div>
		</div>
<?php	}?>