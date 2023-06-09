using Microsoft.EntityFrameworkCore;

public class StudentDBContext : DbContext {
    public DbSet<Student> Students { get; set; }
    

    public string DbPath { get; }
    public StudentDBContext()
    {
        var folder = Environment.SpecialFolder.LocalApplicationData;
        var path = Environment.GetFolderPath(folder);
        DbPath = System.IO.Path.Join(path, "student.db");
    }

    protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
    => optionsBuilder.UseSqlite($"Data Source={DbPath}");
}