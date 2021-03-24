<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Eat.Sleep.Data</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style_sheet.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Raleway" rel="stylesheet">
	</head>
	<body>
        <div class="container-fluid">
        <?php require("menu.php");?>
			<main>
                <h1 id="title">Main Title</h1>
                <h4 id="lead">Über die Resultate der Nationalratswahlen wurde in letzter Zeit viel berichtet. Eine Bevölkerungsgruppe wurde dabei jedoch oft übersehen – jene der Auslandschweizer. Ein Blick auf diese Gruppe von Stimmbürger und Kandidaten bringt aufschlussreiche Erkenntnisse.</h4>
                <img id="blog_img" src="img/the-national-council-hall-4575420_960_720.jpg" alt="Die Nationalratshalle">
				<p style="width:80%;margin:auto;">Die Bevölkerungsgruppe der Auslandschweizer werden, in Anspielung auf die vierfache sprachliche Trennung innerhalb der Schweiz, oft als die fünfte Schweiz bezeichnet. Trotz diesem schmeichelhaftem Begriff gehen die Auslandschweizer bei den Nachwahldiskussionen oft unter und finden kaum Beachtung in der Medienlandschaft. Ein Grund hierfür ist sicherlich, dass Daten zum Auslandschweizer-Stimmverhalten nicht zentralisiert zur Verfügung gestellt werden und nur einzelne Kantone, Daten zur Stimmenverteilung der Auslandschweizer separat in ihren Statistiken ausweisen. Die Datenrecherche stellt somit ein erhebliches Hindernis in der Berichterstattung über Auslandschweizer dar.</p>
                
               <script src="https://unpkg.com/d3@5.16.0/dist/d3.min.js"></script>

                <div id="attack_type"></div>
                
                <script>
                    
                    var tooltip = d3.select("#attack_type").append("div").attr("class", "toolTip");
                    
                    // set the dimensions and margins of the graph
                    var margin = {top: 20, right:30, bottom: 40, left: 300},
                        width = 800 - margin.left - margin.right,
                        height = 700 - margin.top - margin.bottom;

                    // append the svg object to the body of the page
                    var svg = d3.select("#attack_type")
                      .append("svg")
                        .attr("width", width + margin.left + margin.right)
                        .attr("height", height + margin.top + margin.bottom)
                      .append("g")
                        .attr("transform",
                              "translate(" + margin.left + "," + margin.top + ")");

                    // Parse the Data
                    d3.csv("attacktype.csv").then(function(data) {

                      // Add X axis
                      var x = d3.scaleLinear()
                        .domain([0, 61600])
                        .range([ 0, width]);
                      svg.append("g")
                        .attr("transform", "translate(0," + height + ")")
                        .call(d3.axisBottom(x))
                        .selectAll("text")
                          .attr("transform", "translate(-10,0)rotate(-45)")
                          .style("text-anchor", "end")
                          .style('fill', 'white')
                          .style("font-size","12");

                      // Y axis
                      var y = d3.scaleBand()
                        .range([ 0, height ])
                        .domain(data.map(d => d.Type))
                        .padding(.1);
                      svg.append("g")
                        .call(d3.axisLeft(y))
                        .selectAll("text")
                          .attr("transform", "translate(-10,0)rotate(-45)")
                          .style("text-anchor", "end")
                          .style('fill', 'white')
                          .style("font-size","12");

                      //Bars
                      svg.selectAll("myRect")
                        .data(data)
                        .enter()
                        .append("rect")
                        .attr("x", x(0) )
                        .attr("y", function(d) { return y(d.Type); })
                        .attr("width", function(d) { return x(d.Count); })
                        .attr("height", y.bandwidth() )
                        .attr("fill", "#a60a24")
                        .on("mousemove", function(d){
                            tooltip
                            .style("left", d3.event.pageX - 50 + "px")
                            .style("top", d3.event.pageY - 70 + "px")
                            .style("display", "inline-block")
                            .html((d.Count));
                            })
                            .on("mouseout", function(d){ tooltip.style("display", "none");});
                        
                      svg.append("text")
                        .attr("x", (width / 2))             
                        .attr("y", 0 - (margin.top / 2)+5)
                        .attr("text-anchor", "middle")  
                        .style("font-size", "16px")   
                        .style('fill', 'white')
                        .text("Type of Attack & Casualties");

                    })

                </script>
                
                		<p>Die Bevölkerungsgruppe der Auslandschweizer werden, in Anspielung auf die vierfache sprachliche Trennung innerhalb der Schweiz, oft als die fünfte Schweiz bezeichnet. Trotz diesem schmeichelhaftem Begriff gehen die Auslandschweizer bei den Nachwahldiskussionen oft unter und finden kaum Beachtung in der Medienlandschaft. Ein Grund hierfür ist sicherlich, dass Daten zum Auslandschweizer-Stimmverhalten nicht zentralisiert zur Verfügung gestellt werden und nur einzelne Kantone, Daten zur Stimmenverteilung der Auslandschweizer separat in ihren Statistiken ausweisen. Die Datenrecherche stellt somit ein erhebliches Hindernis in der Berichterstattung über Auslandschweizer dar.</p>
                
                <script src="https://unpkg.com/d3@5.16.0/dist/d3.min.js"></script>
                
                <div id="group"></div>
                
                <script>
                    
                    // set the dimensions and margins of the graph
                    var margin = {top: 20, right:30, bottom: 40, left: 50},
                        width = 700 - margin.left - margin.right,
                        height = 550 - margin.top - margin.bottom;

                    // append the svg object to the body of the page
                    var svg_attack = d3.select("#group")
                      .append("svg")
                        .attr("width", width + margin.left + margin.right)
                        .attr("height", height + margin.top + margin.bottom)
                      .append("g")
                        .attr("transform",
                              "translate(" + margin.left + "," + margin.top + ")");

                    // Parse the Data
                    d3.csv("casualties_group.csv").then(function(data) {

                      // Add X axis
                      var x = d3.scaleLinear()
                        .domain([0, 41218])
                        .range([ 0, width]);
                      svg_attack.append("g")
                        .attr("transform", "translate(0," + height + ")")
                        .call(d3.axisBottom(x))
                        .selectAll("text")
                          .attr("transform", "translate(-10,0)rotate(-45)")
                          .style("text-anchor", "end")
                          .style('fill', 'white')
                          .style("font-size","12");

                      // Y axis
                      var y = d3.scaleBand()
                        .range([ 0, height ])
                        .domain(data.map(d => d.group))
                        .padding(.1);
                      svg_attack.append("g")
                        .call(d3.axisLeft(y))
                        .selectAll("text")
                          .attr("transform", "translate(-10,0)rotate(-45)")
                          .style("text-anchor", "end")
                          .style('fill', 'white')
                          .style("font-size","12");

                      //Bars
                      svg_attack.selectAll("myRect")
                        .data(data)
                        .enter()
                        .append("rect")
                        .attr("x", x(0) )
                        .attr("y", function(d) { return y(d.group); })
                        .attr("width", function(d) { return x(d.casualties); })
                        .attr("height", y.bandwidth() )
                        .attr("fill", "#a60a24")
                        
                      svg_attack.append("text")
                        .attr("x", (width / 2))             
                        .attr("y", 0 - (margin.top / 2)+5)
                        .attr("text-anchor", "middle")  
                        .style("font-size", "20px")   
                        .style('fill', 'white')
                        .text("Terror Group & Associated Casualties");

                    })

                </script>
                
                
                <p> something about victims</p>
                
                <div id="victims"></div>
                
                <script>
                    
                    // set the dimensions and margins of the graph
                    var margin = {top: 20, right:30, bottom: 40, left: 50},
                        width = 800 - margin.left - margin.right,
                        height = 700 - margin.top - margin.bottom;

                    // append the svg object to the body of the page
                    var svg_victims = d3.select("#victims")
                      .append("svg")
                        .attr("width", width + margin.left + margin.right)
                        .attr("height", height + margin.top + margin.bottom)
                      .append("g")
                        .attr("transform",
                              "translate(" + margin.left + "," + margin.top + ")");

                    // Parse the Data
                    d3.csv("target_type.csv").then(function(data) {

                      // Add X axis
                      var x = d3.scaleLinear()
                        .domain([0, 32834])
                        .range([ 0, width]);
                      svg_victims.append("g")
                        .attr("transform", "translate(0," + height + ")")
                        .call(d3.axisBottom(x))
                        .selectAll("text")
                          .attr("transform", "translate(-10,0)rotate(-45)")
                          .style("text-anchor", "end")
                          .style('fill', 'white')
                          .style("font-size","12");

                      // Y axis
                      var y = d3.scaleBand()
                        .range([ 0, height ])
                        .domain(data.map(d => d.target))
                        .padding(.1);
                      svg_victims.append("g")
                        .call(d3.axisLeft(y))
                        .selectAll("text")
                          .attr("transform", "translate(-10,0)rotate(-45)")
                          .style("text-anchor", "end")
                          .style('fill', 'white')
                          .style("font-size","12");

                      //Bars
                      svg_victims.selectAll("myRect")
                        .data(data)
                        .enter()
                        .append("rect")
                        .attr("x", x(0) )
                        .attr("y", function(d) { return y(d.target); })
                        .attr("width", function(d) { return x(d.count); })
                        .attr("height", y.bandwidth() )
                        .attr("fill", "#a60a24")
                        
                      svg_victims.append("text")
                        .attr("x", (width / 2))             
                        .attr("y", 0 - (margin.top / 2)+5)
                        .attr("text-anchor", "middle")  
                        .style("font-size", "20px")   
                        .style('fill', 'white')
                        .text("Terrorist Attack Targets");

                    })

                </script>
                
                 <p> something about year</p>
                
                <div id="year"></div>
                
                <script>
                    
                    // set the dimensions and margins of the graph
                    var margin = {top: 20, right:30, bottom: 40, left: 50},
                        width = 800 - margin.left - margin.right,
                        height = 700 - margin.top - margin.bottom;

                    // append the svg object to the body of the page
                    var svg_year = d3.select("#year")
                      .append("svg")
                        .attr("width", width + margin.left + margin.right)
                        .attr("height", height + margin.top + margin.bottom)
                      .append("g")
                        .attr("transform",
                              "translate(" + margin.left + "," + margin.top + ")");

                    // Parse the Data
                    d3.csv("year_attacks_casualties.csv").then(function(data) {

                      // Add y axis
                      var y = d3.scaleLinear()
                        .domain([44492,0])
                        .range([ 0, height ]);
                      svg_year.append("g")
                        .call(d3.axisLeft(y))
                        .selectAll("text")
                          .attr("transform", "translate(-10,0)rotate(-45)")
                          .style("text-anchor", "end")
                          .style('fill', 'white')
                          .style("font-size","12");

                      // x axis
                      var x = d3.scaleBand()
                        .range([ 0, width])
                        .domain(data.map(d => d.year))
                        .padding(.1);
                      svg_year.append("g")
                        .attr("transform", "translate(0," + height + ")")
                        .call(d3.axisBottom(x))
                        .selectAll("text")
                          .attr("transform", "translate(-10,0)rotate(-45)")
                          .style("text-anchor", "end")
                          .style('fill', 'white')
                          .style("font-size","12");
                        
                        // Bars
                         // Bars
                      svg_year.selectAll("mybar")
                        .data(data)
                        .enter()
                        .append("rect")
                          .attr("x", function(d) { return x(d.year); })
                          .attr("y", function(d) { return y(d.casualties); })
                          .attr("width", x.bandwidth())
                          .attr("height", function(d) { return height - y(d.casualties); })
                          .attr("fill", "#a60a24")
                        
                      svg_year.append("text")
                        .attr("x", (width / 2))             
                        .attr("y", 0 - (margin.top / 2)+5)
                        .attr("text-anchor", "middle")  
                        .style("font-size", "20px")   
                        .style('fill', 'white')
                        .text("Years");

                    })

                </script>
                
                <p>map of terror</p>
			</main>
            </div>
			<footer>
                <div class="myfooter text-center py-1">
                    Yanik Kipfer - Seminar Webprogrammierung und Datenvisualisierung FS 2020
                </div>
            </footer>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>
