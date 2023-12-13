using Microsoft.EntityFrameworkCore;

namespace OnlineAssessment.Models
{
    public class OnlineAssessmentContext : DbContext
    {
        public OnlineAssessmentContext(DbContextOptions options)
         : base(options)
        {

        }

        public DbSet<Question>? Questions { get; set; }
        public DbSet<Candidate>? Candidates { get; set; }
        public DbSet<Assessment>? Assessments { get; set; }
        public DbSet<User>? Users { get; set; }
    }
}