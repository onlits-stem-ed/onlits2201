namespace DatabaseConnectivity;

public class InsertDataEF
{
    public void SetData(int admissionNumber, string name)
    {
        using var db = new CrudTestContext();
        var student = db.Students
        .OrderBy(s => s.AdmissionNo)
        .First();
        // var student = db.Students;
        Console.WriteLine(student.AdmissionNo + "\t" + student.Name);
    }
}