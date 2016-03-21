var app = app || {};

// maak hier een app.randomStudentView object
// dit object is je koppeling met je html om random studenten te kunnen laten zien
// als je op shuffle klikt, dan moet dit script dit afvangen en actie ondernemen
// om bij de model iets op te halen

app.randomStudentsView = {

    init: function(){

        // Grab the template script from the dom
        var templateSrc = document.querySelector("#randomStudentTemplate").innerHTML;
        this.shuffleButton = document.querySelector(".randomStudent")
        var testData = {
            students: [
                {firstName:"Henk", lastname:"Pater"},
                {firstName:"Jan", lastname:"Klaasen"},
                {firstName:"Piet", lastname:"Hengst"}
            ]
        };

        this.addEventListener("click",this.studentClicked.bind(this));

        // Transform the HTML template into a 'real' template
        this.template = Handlebars.compile(templateSrc);

        // call the render function
        this.render(testData);



    },

    render: function(data){
        // we retrieve the container and fill the HTML with the template + data
        document.querySelector(".container").innerHTML = this.template(data);
    },

    studentClicked: function(e) {
            var targetRow = e.target;
            console.log(targetRow.dataset.id);
    }



}