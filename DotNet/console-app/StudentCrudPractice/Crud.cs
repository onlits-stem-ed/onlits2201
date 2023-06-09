public class Crud
{
    StudentDBContext db;
    public Crud()
    {
        db = new StudentDBContext();
    }
    public void Create()
    {
        db.Add(new Student { Name = "Mrityunjay" });
        db.SaveChanges();
        Console.WriteLine("Data inserted!");
    }

    public void Read()
    {
        var students = db.Students.ToList();
        foreach (var student in students)
        {
            Console.WriteLine(student.StudentId + "\t" + student.Name);
        }
    }

    public void Read(int Id)
    {
        var student = db.Students.First(s => s.StudentId == Id);
        Console.WriteLine(student.StudentId + "\t" + student.Name);
    }

    public void Update(int Id, String Name)
    {
        var student = db.Students.First(s => s.StudentId == Id);
        student.Name = Name;
        db.SaveChanges();
        Console.WriteLine("Data Updated!");
    }

    public void Delete(int Id)
    {
        var student = db.Students.First(s => s.StudentId == Id);
        db.Remove(student);
        db.SaveChanges();
        Console.WriteLine("Data Deleted!");
    }
}