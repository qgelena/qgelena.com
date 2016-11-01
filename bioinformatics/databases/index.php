<!DOCTYPE html>
<html>
<head>
	<meta name='keywords' content='biology, Python, bioinfirmatics, testing, QA' charset='utf-8'/>
	<meta name='description' content="">
	<meta name='author' content="Alona Sychevska">
	<title>qgelena</title>
	<link rel='stylesheet' href='/static/style.css'/>
</head>
<body>
<?php 
include('../../include/header.php');
?>
<div class="page_content">
<?php 
include('../../include/menu_bioinformatics.php')
?>
	<section id="text" class="inline-blk">
		<p>
			<h3>A databases is a organized collection of data</h3>
			<ul>
				<li>
					<dt><b>Meta databases</b></dt> 
					<dd>collect data from different sources and make available in covenient from Entrez (National Center for Biotechnology information)</dd>
					These databases of databases collect data from different sources and make them available in a new and more convenient form, or with an emphasis on a particular disease or organism.
					<ul>
						<li><a href="http://biograph.be/">BioGraph</a> (University of Antwerp, Vlaams Instituut voor Biotechnologie) A knowledge discovery service based on the integration of more than 20 heterogeneous databases</li>
						<li><a href="https://en.wikipedia.org/wiki/Bioinformatic_Harvester">Bioinformatic Harvester[1]</a> (Karlsruhe Institute of Technology) - Integrating 26 major protein/gene resources.</li>
						<li><a href="https://en.wikipedia.org/wiki/Neuroscience_Information_Framework">Neuroscience Information Framework[2]</a> (University of California, San Diego) - Integrates hundreds of neuroscience relevant resources, many are listed below.</li>
						<li><a href="https://en.wikipedia.org/wiki/ConsensusPathDB">ConsensusPathDB</a> - A molecular functional interaction database, integrating information from 12 other databases.</li>
						<li><a href="https://en.wikipedia.org/wiki/Entrez">Entrez[3]</a> (National Center for Biotechnology Information)</li>
						<li><a href="http://www.ebi.ac.uk/enzymeportal">Enzyme Portal</a> Integrates enzyme information such as small-molecule chemistry, biochemical pathways and drug compounds. (European Bioinformatics Institute)
						<li><a href="http://eugenes.org/">euGenes</a> (Indiana University)</li>
						<li><a href="http://www.genecards.org/">GeneCards</a> (Weizmann Inst.)</li>
						<li><a href="https://en.wikipedia.org/wiki/MetaBase">MetaBase[4]</a> (KOBIC) - A user contributed database of biological databases.</li>
						<li><a href="http://www.cyber-indian.com/bioperl/index.html">mGen</a> containing four of the world biggest databases GenBank, Refseq, EMBL and DDBJ - easy and simple program friendly gene extraction</li>
						<li><a href="https://www.proteinspire.org/MOPED">MOPED</a> (Seattle Children's Research Institute) - A multi-omics expression profiling database providing integrated proteomics and transcriptomics data from human, mouse, worm, and yeast.</li>
						<li><a href="http://pathogenportal.org/portal/portal/PathPort/Home">PathogenPortal</a> A repository linking to the Bioinformatics Resource Centers (BRCs) sponsored by the National Institute of Allergy and Infectious Diseases (NIAID)</li>
						<li><a href="http://smd.stanford.edu/cgi-bin/source/sourceSearch">SOURCE</a> (Stanford University) encapsulates the genetics and molecular biology of genes from the genomes of Homo sapiens, Mus musculus, and Rattus norvegicus into easy to navigate GeneReports</li>
						<li><a href="http://irefindex.org/">iRefIndex:</a> provides an index of protein interactions available in a number of primary interaction databases including BIND, BioGRID, CORUM, DIP, HPRD, InnateDB, IntAct, MatrixDB, MINT, MPact, MPIDB, MPPI and OPHID.</li>
						<li><a href="http://www.pathwaycommons.org/">Pathway Commons</a> (Memorial Sloan-Kettering Cancer Center and University of Toronto)</li>
						<li><a href="http://nowomics.com/">Nowomics</a> Tracks changes in several biological databases, users 'follow' genes and keywords to see a news feed of new data and papers.</li>
						<li><a href="http://biogps.org/">BioGPS</a> (The Scripps Research Institute) An extensible Gene Portal System. Plugin library extends BioGPS beyond the Gene Expression Visualizer and the links to Gene Wiki to a huge number of other databases and services
						<li>The Encyclopedia of DNA Elements<a href="https://en.wikipedia.org/wiki/ENCODE">(ENCODE)</a>  Consortium is an international collaboration of research groups to build a comprehensive parts list of functional elements in the human genome. The corresponding data is available for download and analysis from UCSC Genome Browser.</li>
						<li><a href="http://www.genboree.org/epigenomeatlas/index.rhtml">Human Epigenome Atlas</a>, a collection of normal epigenomes of different tissues produced by Roadmap Epigenomics Project. Data types include histone modifications, DNA methylation, chromatin accessibility, gene expression, and small RNA expression.</li>
						<li><a href="http://metascape.org/">Metascape</a> provides click-to-extract access to gene-centric function annotations complied from dozens of databases including NCBI (Entrez, OMIM, ClinVar), GO, KEGG, MSiGDB, UniProt, Protein Atlas, Ensembl, JAX, DrugBank, NHGRI-EBI, DDG2P.</li>
						<li><a href="http://www.agingportfolio.org/">International Aging Research Portfolio</a> (IARP) - a curated database of biomedical grants from many sources including NIH, NSF, CORDIS, Australian Research Council linked to publications.</li>
					</ul>
				</li>
				<li><b>Genome Databases</b></br>
					These databases collect genome sequences, annotate and analyze them, and provide public access. Some add curation of experimental literature to improve computed annotations. These databases may hold many species genomes, or a single model organism genome.
						<ul>
							<li>Bioinformatic Harvester</li>
							<li>Gene Disease Database</li>
							<li>SNPedia</li>
							<li>CAMERA Resource for microbial genomics and metagenomics</li>
							<li>Corn, the Maize Genetics and Genomics Database</li>
							<li>EcoCyc a database that describes the genome and the biochemical machinery of the model organism E. coli K-12</li>
							<li>Ensembl provides automatic annotation databases for human, mouse, other vertebrate and eukaryote genomes.</li>
							<li>Ensembl Genomes provides genome-scale data for bacteria, protists, fungi, plants and invertebrate metazoa, through a unified set of interactive and programmatic interfaces (using the Ensembl software platform).</li>
							<li>PATRIC, the PathoSystems Resource Integration Center</li>
							<li>Flybase, genome of the model organism Drosophila melanogaster</li>
							<li>MGI Mouse Genome (Jackson Lab.)</li>
							<li>JGI Genomes of the DOE-Joint Genome Institute provides databases of many eukaryote and microbial genomes.</li>
							<li>National Microbial Pathogen Data Resource. A manually curated database of annotated genome data for the pathogens Campylobacter, Chlamydia, Chlamydophila, Haemophilus, Listeria, Mycoplasma, Neisseria, Staphylococcus, Streptococcus, Treponema, Ureaplasma, and Vibrio.</li>
							<li>RegulonDB RegulonDB is a model of the complex regulation of transcription initiation or regulatory network of the cell E. coli K-12.</li>
							<li>Repbase Repbase is the most commonly used database for repetitive elements (transposons).</li>
							<li>Saccharomyces Genome Database, genome of the yeast model organism.</li>
							<li>Viral Bioinformatics Resource Center Curated database containing annotated genome data for eleven virus families.</li>
							<li>The SEED platform for microbial genome analysis includes all complete microbial genomes, and most partial genomes. The platform is used to annotate microbial genomes using subsystems.</li>
							<li>Xenbase, genome of the model organism Xenopus tropicalis and Xenopus laevis</li>
							<li>Wormbase, genome of the model organism Caenorhabditis elegans and WormBase ParaSite for parasitic species</li>
							<li>Zebrafish Information Network, genome of this fish model organism.</li>
							<li>TAIR, The Arabidopsis Information Resource.</li>
							<li>UCSC Malaria Genome Browser, genome of malaria causing species (Plasmodium falciparum and others)</li>
							<li>RGD Rat Genome Database: Genomic and phenotype data for Rattus norvegicus</li>
							<li>INTEGRALL: Database dedicated to integrons, bacterial genetic elements involved in the antibiotic resistance</li>
							<li>Fourmidable ant genome database provides ant genome blast search and sequence download.</li>
							<li>VectorBase The NIAID Bioinformatics Resource Center for Invertebrate Vectors of Human Pathogens</li>
							<li>EzGenome, comprehensive information about manually curated genome projects of prokaryotes (archaea and bacteria)[2]</li>
							<li>Banana Genome Hub, The Banana Genome database.</li>
							<li>GeneDB for Apicomplexan Protozoa, Kinetoplastid Protozoa, Parasitic Helminths, Parasite Vectors + several bacteria and viruses</li>
							<li>EuPathDB Eukaryotic pathogen database resources includes amoeba, fungi, plamodium, trypanosomatids etc.</li>
							<li>SNiPhunter SNP search engine: search for SNPs in Pubmed open access literature using SNP IDs.</li>
							<li>The 1000 Genomes Project was launched in January 2008. The genomes of more than a thousand anonymous participants from a number of different ethnic groups were analyzed and made publicly available.</li>
							<li>Personal Genome Project: human genomes</li>
							<li>Legume Information System (LIS): genomic database for the legume family.[3]</li>
							<li>PeanutBase: genetic and genomic data to enable more rapid crop improvement in peanut.[4]</li>
							<li>Legume Federation: A consortium of scientists working to support robust agriculture for a substantially legume-fed world.[3]</li>
						</ul>
				</li>
				<li><b>Protein Sequence databases</b>
					<ul>
						<li><a href="https://en.wikipedia.org/wiki/UniProt">UniProt</a> Universal Pesource (EBI, Swiss Institute of Bioinformatics, PIR)</li>
						<li>Protein Information Resource (Georgetown University Medical Center (GUMC))</li>
						<li><a href="https://en.wikipedia.org/wiki/Protein_Information_Resource">Swiss-Prot</a> Protein Knowledgebase (Swiss Institute of Bioinformatics)</li>
						<li><a href="http://pedant.gsf.de/">PEDANT</a> Protein Extraction, Description and ANalysis Tool (Forschungszentrum f. Umwelt & Gesundheit)</li>
						<li><a href="https://en.wikipedia.org/wiki/PROSITE">PROSITE</a> Database of Protein Families and Domains</li> 
						<li><a href="https://en.wikipedia.org/wiki/Database_of_Interacting_Proteins">Database of Interacting Proteins (Univ. of California)</a></li>
						<li><a href="https://en.wikipedia.org/wiki/Pfam">Pfam</a> Protein families database of alignments and HMMs (Sanger Institute)</li>
						<li><a href="https://en.wikipedia.org/wiki/PRINTS">PRINTS </a> a compendium of protein fingerprints from (Manchester University)</li>
						<li><a href="http://protein.foulouse.inra.fr/prodom/current/html/home.php">ProDom</a> Comprehensive set of Protein Domain Families (INRA/CNRS)</li>
						<li><a href="http://www.cbs.dtu.dk/services/SignalP/">SignalP 3.0</a> Server for signal peptide prediction (including cleavage site prediction), based on artificial neural networks and HMMs</li>
						<li><a href="https://en.wikipedia.org/wiki/SUPERFAMILY">SUPERFAMILY</a> Library of HMMs representing superfamilies and database of (superfamily and family) annotations for all completely sequenced organisms</li>
						<li><a href="https://en.wikipedia.org/wiki/NeXtProt">neXtProt</a> - a human protein centric knowledge resource</li>
						<li><a href="http://clearinghouse.nmpdr.org/aclh.cgi">Annotation Clearing House</a> a project from the National Microbial Pathogen Data Resource</li>
						<li><a href="https://en.wikipedia.org/wiki/InterPro">InterPro</a> Classifies proteins into families and predicts the presence of domains and sites.</li>
						<li><a href="https://proteomescout.wustl.edu/">ProteomeScout</a> - Includes a graphics exports of protein annotations including domains, secondary structure, and post-translational modifications</li>
					</ul>
				</li>

				<li><b>Protein structure databases</b></br>
				Primary databases
					<ol>
						<li><a href="http://www.rcsb.org/pdb/home/home.do">Protein Data Bank</a>(PDB) comprising:
							<ul>
								<li>Protein DataBank in Europe (PDBe)</li>
								<li>ProteinDatabank in Japan (PDBj)</li>
								<li>Research Collaboratory for Structural Bioinformatics (RCSB)</li>
							</ul>
						</li>
					</ol>
				Secondary databases
					<ol>
						<li>SCOP Structural Classification of Proteins</li>
						<li>CATH Protein Structure Classification</li>
						<li>PDBsum</li>
					</ol>
					For more protein structure databases, see also Protein structure database
				</li>
				<li><b>RNA databases</b>
					<ul>
						<li>C-It-Loci [6] – A database of RNA expression and conserved loci for studying lncRNAs across species.</li>
						<li>LncRNAWiki [7], a wiki-based database for community curation of known human long non-coding RNAs</li>
						<li>Rfam [8], a database of RNA families</li>
						<li>miRBase [9], the microRNA database</li>
						<li>snoRNAdb, a database of snoRNAs</li>
						<li>lncRNAdb, a database of lncRNAs</li>
						<li>DASHR The DAtabase of Small Human non-coding RNAs: integrated annotation and sequencing-based expression data for all major classes of human small non-coding RNAs (sncRNAs) for both full sncRNA transcripts and mature sncRNA products derived from these larger RNAs.</li>
						<li>MONOCLdb The MOuse NOnCode Lung database: Annotations and expression profiles of mouse long non-coding RNAs (lncRNAs) involved in Influenza and SARS-CoV infections.</li>
						<li>piRNAbank, a database of piRNAs</li>
						<li>GtRNAdb, a database of genomic tRNAs</li>
						<li>MINTbase, a framework for the interactive exploration of mitochondrial and nuclear tRNA fragments</li>
						<li>SILVA, a database of ribosomal RNAs</li>
						<li>RDP, the Ribosomal Database Project</li>
						<li>tmRDB, a database of tmRNAs</li>
						<li>SRPDB, a database of signal recognition particle RNAs</li>
						<li>yeast snoRNA database</li>
						<li>Sno/scaRNAbase, a database of snoRNA and scaRNAs</li>
						<li>snoRNA-LBME-db, a snoRNA database</li>
					</ul>
				</li>
				<li><b>Metabolic Pathway Databases</b></li>
				<li>
					<dt><a href="https://gold.jgi.doe.gov/">GOLD (Genome Online Database)</a></dt>
					<dd>Можливості:
						<ul>
							<li>Пошук вже існуючих проектів</li>
							<li>Реєстрація свого проекту</li>
							<li>Анотація ваших даних</li>
							<li>Публікація даних</li>
						</ul>
					</dd>
				</li>
			</ul>
		</p>
	</section>
<?php
include('../../include/contacts.php');
?>
</div>	
<?php 
include('../../include/footer.php');
?>			
</body>
</html>