function Course(title, code){
  this.title = title
  this.code = code
}

function Student(firstName, lastName, dept, matricNo) {
  this.firstName = firstName
  this.lastName = lastName
  this.dept = dept
  this.matricNo = matricNo
  this.registeredCourses = []
  this.registeredCoursesCodesSet = new Set()
}

Student.prototype.setLastName = function(newLastName) {
  this.lastName = newLastName
}

Student.prototype.registerCourse = function(course){
  if (this.registeredCoursesCodesSet.has(course.code)){
    console.log("Course Already Registered By Student!")
    return
  }
  
  this.registeredCourses.push(course)
  this.registeredCoursesCodesSet.add(course.code)
}

Student.prototype.listRegisteredCoursesTitles = function(){
  for (let i = 0; i < this.registeredCourses.length; i++){
    const course = this.registeredCourses[i]
    console.log(course.title)
  }
}

const CSC415 = new Course("Web Dev", "CSC415")
const CSC416 = new Course("PROJECT management", 'CSC416')
const student = new Student("Joseph", "Godwin", "CSC", 170805066)
student.registerCourse(CSC415)
student.registerCourse(CSC416)
student.listRegisteredCoursesTitles()

const nigga = {
  firstName: "Joe",
  "lastName": "Biden",
  registeredCourses: [],
  registerCourse(){

  },
  listRegisteredCoursesTitles(){

  }
}
