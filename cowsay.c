#include <stdio.h>
#include <stdlib.h>

void printCowSay(const char *message) {
    printf("  %s\n", message);
    printf("     \\   ^__^\n");
    printf("      \\  (oo)\\_______\n");
    printf("         (__)\\       )\\/\\\n");
    printf("             ||----w |\n");
    printf("             ||     ||\n");
}

int main(int argc, char *argv[]) {
    if (argc != 2) {
        fprintf(stderr, "Usage: %s <message>\n", argv[0]);
        return EXIT_FAILURE;
    }

    const char *message = argv[1];
    printCowSay(message);

    return EXIT_SUCCESS;
}
