// See https://aka.ms/new-console-template for more information
Console.WriteLine("Student CRUD Test!");

// new Crud().Create();

// new Crud().Read();

// var db = new StudentDBContext();

// var student = db.Students.OrderBy(s => s.StudentId).First();

new Crud().Read();
// new Crud().Read(3);

Console.WriteLine();

// new Crud().Update(3, "Ashish Kumar");
new Crud().Delete(4);

Console.WriteLine();

new Crud().Read();