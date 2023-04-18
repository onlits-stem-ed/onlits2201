using System;
using System.Collections.Generic;
using Microsoft.EntityFrameworkCore;

namespace DatabaseConnectivity;

public partial class CrudTestContext : DbContext
{
    public CrudTestContext()
    {
    }

    public CrudTestContext(DbContextOptions<CrudTestContext> options)
        : base(options)
    {
    }

    public virtual DbSet<Student> Students { get; set; }

    protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
#warning To protect potentially sensitive information in your connection string, you should move it out of source code. You can avoid scaffolding the connection string by using the Name= syntax to read it from configuration - see https://go.microsoft.com/fwlink/?linkid=2131148. For more guidance on storing connection strings, see http://go.microsoft.com/fwlink/?LinkId=723263.
        => optionsBuilder.UseSqlite("Data Source=crud_test.db");

    protected override void OnModelCreating(ModelBuilder modelBuilder)
    {
        modelBuilder.Entity<Student>(entity =>
        {
            entity.HasKey(e => e.AdmissionNo);

            entity.ToTable("student");

            entity.Property(e => e.AdmissionNo)
                .ValueGeneratedNever()
                .HasColumnType("INT")
                .HasColumnName("admission_no");
            entity.Property(e => e.Name)
                .HasColumnType("varchar(50)")
                .HasColumnName("name");
        });

        OnModelCreatingPartial(modelBuilder);
    }

    partial void OnModelCreatingPartial(ModelBuilder modelBuilder);
}
