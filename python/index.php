<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'/>
	<title>qgelena</title>
	<link rel='stylesheet' href='/static/style.css'/>
	<meta name='keywords' content='biology, Python, bioinfirmatics, testing, QA' charset='utf-8'/>
	<meta name='description' content="">
	<meta name='author' content="Alona Sychevska">
<body>
<header class='site-header'>
	<div id="title_header">
		<h1 class="inline">Python</h1>
		<img src="/static/Pythonlogo.png" width="35" height="25" class="inline"/>
	</div>
<?php 
include('../include/header.php');
?>	
</header>
<div class="page_content">
	<div id="text">
		<p>
		<b>Python<sup><a href="#2">1</a></sup></b> is powerful... and fast;<br>
		plays well with others;<br> 
		runs everywhere;<br> 
		is friendly &amp; easy to learn;<br> 
		is Open.<br>
		</p>
		<h2><a href="https://www.python.org/about/success/mmtk/">Python Success Stories</a></h2>
		<p><b>Background</b><br>
		The <a href="http://dirac.cnrs-orleans.fr/MMTK/">Molecular Modeling Toolkit</a> (MMTK) is a open source Python library for molecular modeling and<br>
		simulation with a focus on biomolecular systems, written in a mixture of Python and C. It provides<br> 
		standard techniques such as Molecular Dynamics or normal mode calculations in a ready-to-use form, but<br>
		 also provides a basis of low-level operations on top of which new techniques can easily be implemented.
		</p>
		<p>I started developing MMTK in 1996. I had some experience with mainstream simulation packages for<br>
		biomolecules that were written in Fortran and had their origins in the 1970s. Those packages were too<br>
		cumbersome to use and in particular to modify and extend. Since my research work is focused on the<br>
		development of new simulation techniques, modifiability was a particularly important criterion.<br>
		<img src="/static/groel_deformation-web.jpg"/>
		</p>
		<em>Dynamic deformation of the chaperon protein GroEL, obtained with the MMTK-based interactive</em><br>
		<a href="http://dirac.cnrs-orleans.fr/DomainFinder/">DomainFinder</a><a href="https://www.python.org/m/about/success/mmtk/groel_deformation.tiff">(Zoom in)</a>
		<p>
		<sup><a href="/index.htm#1">2</a></sup>
		Characteristic features of biomolecular simulations that had to be taken into account are the long<br>
		execution times of some simulation techniques (several weeks are not uncommon) and the complexity of<br>
		the data structures describing biomolecules.
		</p>
		<p>
		<b>Choice of languages</b><br>
		The choice of Python plus C was made after an evaluation of various languages. I was rapidly convinced<br>
		that only a mixture of a high-level interpreted language and a CPU-efficient compiled language could<br>
		meet my seemingly conflicting requirements of rapid development and efficient execution.
		</p>
		<p>
		For the high-level part, Tcl was ruled out because it could not handle the complex data structures required<br>
		by the project. Perl was ruled out because of its unpleasant syntax (this was of course a subjective choice),<br>
		and because of its badly integrated OO mechanism. Python scored high in readability, OO support, library<br>
		support, and integration with compiled languages. Moreover, Numerical Python had just been released<br>
		and was an important building block for my developments.
		</p>
		<p>
		For the low-level part, Fortran 77 was eliminated because of its archaic character, lack of memory<br>
		management, and portability issues in C-Fortran interfacing. C++ was a candidate, but ultimately not<br>
		chosen because portability between compilers was still an issue in 1996, and because I considered the<br>
		benefits of C++ for the small amount of compiled code in the project insufficient to compensate for the<br>
		complexity of the language.
		</p>
		<p>
		<b>Library architecture</b><br>
		The architecture of MMTK is clearly Python-driven. To the user, it presents itself as a pure Python library.<br>
		The C code in MMTK was written from scratch in the form of Python extension modules that only handle<br>
		the few time-critical aspects: evaluation of interaction energies, and long-running iterative algorithms<br>
		such as energy minimization and Molecular Dynamics, which run without any Python-related overhead.<br>
		Extensive use is made of Numerical Python, LAPACK, and the netCDF library. MMTK provides multi-threading<br>
		support for shared memory parallel machines, and MPI-based parallelization for distributed memory machines.
		</p>
		<p>
		The biggest part of MMTK is a set of classes that describe atoms and molecules and manage a database of<br>
		molecules and fragments. Biomolecules (proteins, DNA, and RNA) are handled by subclasses of the<br>
		generic Molecule class. Another important subset of MMTK implements schemas for calculating interaction<br>
		energies (called somewhat incorrectly "force fields" in the simulation community). I/O-related code<br>
		is the third pillar of MMTK. It reads and writes a few popular file formats plus its own trajectory format<br>
		that is based on the netCDF format. Contrary to other trajectory file formats, MMTK's netCDF files are both<br>
		binary (and thus compact) files and portable between platforms. and moreover permit efficient access to<br> 
		nearly arbitrary subsets.<br>
		<img src="/static/lysozyme_with_solvent-web.jpg"/><br>
		<em>Snapshot from a Molecular Dynamics simulation of lysozyme in water, run with MMTK.</em><a href="https://www.python.org/m/about/success/mmtk/lysozyme_with_solvent.tiff">Zoom in</a>
		</p>
		<p>
		Modularity and extendibility were important design criteria. Algorithms, energy terms, and specializations<br>
		of the data types can be added without having to modify the MMTK code. The design of MMTK as a library,<br>
		rather than a closed program, is essential for many applications.
		</p>
		<p>
		An important aspect of biomolecular simulations is visualization. MMTK delegates this task to external<br>
		tools. Two visualization programs, VMD and PyMOL, are particularly well integrated.
		</p>
		<p>
		Most MMTK users access the library from simple Python scripts, but MMTK has also been used as a basis<br>
		for end-user programs with graphical user interfaces, such as nMOLDYN and DomainFinder.
		</p>
		<p id="2">
		MMTK currently consists of about 18,000 lines of Python code, 12,000 lines of hand-written C code, and<br>
		some machine-generated C code. The majority of the code was developed by one person during eight<br>
		years as part of a research activity. Two modules, some functions, and many ideas were contributed by the<br>
		user community.
		</p>
		<p>
		<b>Practical experience</b><br>
		MMTK and other Python libraries have been the basis for all my research projects for ten years. Many of<br>
		these projects would not have been possible without the rapid prototyping that is characteristic for<br>
		Python. In methodological work, development and testing time is essential: an idea that can be tried out<br>
		in an afternoon will be tried out, whereas an idea that requires a week of work for evaluation is often put aside.
		</p>
		<p>
		As with all open source projects, the size of the MMTK user community can only be estimated indirectly.<br>
		The mailing list for MMTK users currently has 175 members, and the scientific publication that describes<br>
		MMTK to computational chemists has been cited 30 times.
		</p>
		<b>About the author</b><br>
		<p><em>
		Konrad Hinsen is a researcher in theoretical physics working for the French Centre National de la Recherche<br>
		Scientifique (CNRS). He was involved in the Numerical Python project and is the author of ScientificPython, a<br>
		general-purpose library of scientific Python code.
		</em></p>
	</div>
</div>
<?php 
include('../include/footer.php');
?>
</body>
</html>
