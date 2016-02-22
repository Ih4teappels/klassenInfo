var app = app || {};

// maak hier een app.randomStudentView object
// dit object is je koppeling met je html om random studenten te kunnen laten zien
// als je op shuffle klikt, dan moet dit script dit afvangen en actie ondernemen
// om bij de model iets op te halen

app.top3View = {

    init: function(){

        // Grab the template script from the dom
        var templateSrc = document.querySelector("#top3template").innerHTML;

        var testData = {
            students: [
                {firstName:"Henk", lastname:"Pater"},
                {firstName:"Jan", lastname:"Klaasen"},
                {firstName:"Piet", lastname:"Hengst"}
            ]
        };

        // Transform the HTML template into a 'real' template
        this.template = Handlebars.compile(templateSrc);

        // call the render function
        this.render(testData);

    },

    render: function(data){
        // we retrieve the container and fill the HTML with the template + data
        document.querySelector(".container").innerHTML = this.template(data);
    }

}