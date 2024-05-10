<?php

// Interface untuk representasi komentar dan balasannya
interface IComment {
    public function getTotalComments(array $comments): int;
}

// Implementasi interface
class Comment implements IComment {
    // Fungsi untuk menghitung total komentar
    public function getTotalComments(array $comments): int {
        $total_comments = 0;
        foreach ($comments as $comment) {
            $total_comments++; // Hitung komentar utama
            if (isset($comment['replies'])) {
                // Rekursif: Hitung balasan komentar
                $total_comments += $this->getTotalComments($comment['replies']);
            }
        }
        return $total_comments;
    }
}

// Data komentar
$comments = [
    [
        'commentId' => 1,
        'commentContent' => 'Hai',
        'replies' => [
            [
                'commentId' => 11,
                'commentContent' => 'Hai juga',
                'replies' => [
                    [
                        'commentId' => 111,
                        'commentContent' => 'Haai juga hai jugaa'
                    ],
                    [
                        'commentId' => 112,
                        'commentContent' => 'Haai juga hai jugaa'
                    ]
                ]
            ],
            [
                'commentId' => 12,
                'commentContent' => 'Hai juga',
                'replies' => [
                    [
                        'commentId' => 121,
                        'commentContent' => 'Haai juga hai jugaa'
                    ]
                ]
            ]
        ]
    ],
    [
        'commentId' => 2,
        'commentContent' => 'Halooo'
    ]
];

// Buat objek Comment
$commentObj = new Comment();

// Hitung total komentar
$total_comments = $commentObj->getTotalComments($comments);

// Tampilkan total komentar
echo "Total komentar: $total_comments";

?>
