using System.ComponentModel.DataAnnotations;

namespace OnlineAssessment.Models
{
    public class Question
    {
        public int Id { get; set; }
        [Required]
        public string? Questions { get; set; }


        public int AssessmentId { get; set; }
        public Assessment Assessment { get; set; }
    }
}