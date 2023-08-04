using System.ComponentModel.DataAnnotations;

namespace OnlineAssessment.Models
{
    public class Candidate
    {
        public int Id { get; set; }
        [Required]
        public string? Name { get; set; }
        [Required]
        public string? Gender { get; set; }


        public int AssessmentId { get; set; }
        public Assessment Assessment { get; set; }
    }
}