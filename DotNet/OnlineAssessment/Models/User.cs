using System.ComponentModel.DataAnnotations;

namespace OnlineAssessment.Models
{
    public class User
    {
        [Key]
        public string? UserId { get; set; }
        public string? Password { get; set; }
        public string? Role { get; set; }
    }
}
