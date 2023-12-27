class Student {
    static studentCount = 0;
    constructor(name, age, phoneNumber, boardMarks) {
        this.name = name;
        this.age = age;
        this.phoneNumber = phoneNumber;
        this.boardMarks = boardMarks;
    }

    eligible() {
        if (this.boardMarks > 40)
            console.log("Eligible");
        else
            console.log("Not-eligible");
    }

    static increaseStudentCount() {
        Student.studentCount++;
    }

    static printStudentCount() {
        console.log("Total student count is: " + Student.studentCount);
    }
}

s1 = new Student("Raju Kumar", 20, "8456953258", 56);
s1.eligible();
Student.increaseStudentCount();
s2 = new Student("Ujjwal Kumar", 21, "7458236985", 35);
s2.eligible();
Student.increaseStudentCount();
Student.printStudentCount();
